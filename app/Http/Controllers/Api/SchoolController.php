<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use App\Http\Resources\SchoolResource;
use App\Models\School;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;
use Illuminate\Support\Facades\Validator;

class SchoolController extends Controller
{
    public function index()
    {
        //get all school
        $school = School::latest()->paginate(5);

        //return collection of school as a resource
        return new SchoolResource(true, 'List Data Schools', $school);
    }
    public function store(Request $request)
    {
        //define validation rules
        $validator = Validator::make($request->all(), [
            'logo'     => 'required|mimes:jpeg,png,jpg,gif,svg|max:2048',
            'nsm'     => 'required|unique:schools,nsm',
            'npsn'   => 'required|unique:schools,npsn',
            'level'   => 'required',
            'name'   => 'required',
            'address'   => 'required',
            'start_date'   => 'required',
            'end_date'   => 'required',
            'token'   => 'required',
        ]);
        //check if validation fails
        if ($validator->fails()) {
            return response()->json($validator->errors(), 422);
        }
        //upload logo
        $logo = $request->file('logo');
        $logo->storeAs('public/schools', $logo->hashName());
        //create school
        $school = School::create([
            'logo'     => $logo->hashName(),
            'nsm'     => $request->nsm,
            'npsn'   => $request->npsn,
            'level'   => $request->level,
            'name'   => $request->name,
            'address'   => $request->address,
            'start_date'   => $request->start_date,
            'end_date'   => $request->end_date,
            'token'   =>  $request->token,
            'expiration_time'   => $request->end_date,
        ]);

        //return response
        return new SchoolResource(true, 'Data School Berhasil Ditambahkan!', $school);
    }

    public function show($npsn)
    {
        //find school by ID
        $school = School::where('npsn', $npsn)->first();
        if (!$school) {
            return response()->json([
                'success' => false,
                'message' => 'School not found.',
                'data' => null
            ], 404);
        }
        //return single school as a resource
        return new SchoolResource(true, 'Detail Data School!', $school);
    }

    public function update(Request $request, $npsn)
    {
        //define validation rules
        $validator = Validator::make($request->all(), [
            'logo'     => 'nullable|mimes:jpeg,png,jpg,gif,svg|max:2048',
            'nsm'     => 'required|unique:schools,nsm,' . $request->nsm . ',nsm',
            'npsn'   => 'required|unique:schools,npsn,' . $request->npsn . ',npsn',
            'level'   => 'required',
            'name'   => 'required',
            'address'   => 'required',
            'status' => 'nullable|in:1,0',
            'start_date'   => 'required',
            'end_date'   => 'required',
            'token'   => 'required',
        ]);
        //check if validation fails
        if ($validator->fails()) {
            return response()->json($validator->errors(), 422);
        }
        //find school by ID
        $school = School::where('npsn', $npsn)->first();
        if (!$school) {
            return response()->json([
                'success' => false,
                'message' => 'School not found.',
                'data' => null
            ], 404);
        }
        //check if logo is not empty
        if ($request->hasFile('logo')) {
            //upload logo
            $logo = $request->file('logo');
            $logo->storeAs('public/schools', $logo->hashName());
            //delete old logo
            Storage::delete('public/schools/' . basename($school->logo));
            //update school with new logo
            $school->update([
                'logo'     => $logo->hashName(),
                'nsm'     => $request->nsm,
                'npsn'   => $request->npsn,
                'level'   => $request->level,
                'name'   => $request->name,
                'address'   => $request->address,
                'start_date'   => $request->start_date,
                'end_date'   => $request->end_date,
                'token'   =>  $request->token,
                'expiration_time'   => $request->end_date,
            ]);
        } else {
            //update school without logo
            $school->update([
                'nsm'     => $request->nsm,
                'npsn'   => $request->npsn,
                'level'   => $request->level,
                'name'   => $request->name,
                'address'   => $request->address,
                'start_date'   => $request->start_date,
                'end_date'   => $request->end_date,
                'token'   =>  $request->token,
                'expiration_time'   => $request->end_date,
            ]);
        }
        if ($request->status != null) {
            $school->update([
                'status' => $request->status,
            ]);
        }
        //return response
        return new SchoolResource(true, 'Data School Berhasil Diubah!', $school);
    }

    public function destroy($npsn)
    {
        //find school by ID
        $school = School::where('npsn', $npsn)->first();
        if (!$school) {
            return response()->json([
                'success' => false,
                'message' => 'School not found.',
                'data' => null
            ], 404);
        }
        //delete image
        Storage::delete('public/schools/' . basename($school->image));
        //delete school
        $school->delete();
        //return response
        return new SchoolResource(true, 'Data School Berhasil Dihapus!', null);
    }
}
