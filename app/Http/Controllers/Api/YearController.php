<?php

namespace App\Http\Controllers\APi;

use App\Http\Controllers\Controller;
use App\Http\Resources\YearResource;
use App\Models\Year;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;

class YearController extends Controller
{
    public function index()
    {
        $year = Year::latest()->paginate(5);
        return new YearResource(true, 'List Data Years', $year);
    }
    public function store(Request $request)
    {
        //define validation rules
        $validator = Validator::make($request->all(), [
            'code'   => 'required|unique:years,code',
            'name'     => 'required|unique:years,name',
            'status'   => 'required',
        ]);
        //check if validation fails
        if ($validator->fails()) {
            return response()->json($validator->errors(), 422);
        }
        $year = Year::create([
            'code'     => $request->code,
            'name'   => $request->name,
            'status'   => $request->status,
        ]);
        //return response
        return new YearResource(true, 'Data Year Berhasil Ditambahkan!', $year);
    }
    public function show($code)
    {
        //find year by ID
        $year = Year::where('code', $code)->first();
        if (!$year) {
            return response()->json([
                'success' => false,
                'message' => 'Year not found.',
                'data' => null
            ], 404);
        }
        //return single year as a resource
        return new YearResource(true, 'Detail Data Year!', $year);
    }
    public function update(Request $request, $npsn)
    {
        //define validation rules
        $validator = Validator::make($request->all(), [
            'code'   => 'required|unique:years,code,' . $request->code . ',code',
            'name'     => 'required|unique:years,name,' . $request->name . ',name',
        ]);
        //check if validation fails
        if ($validator->fails()) {
            return response()->json($validator->errors(), 422);
        }
        //find year by ID
        $year = Year::where('npsn', $npsn)->first();
        if (!$year) {
            return response()->json([
                'success' => false,
                'message' => 'Year not found.',
                'data' => null
            ], 404);
        }
        //check if logo is not empty
        $year->update([
            'code'     => $request->code,
            'name'   => $request->name,
        ]);
        if ($request->status != null) {
            $year->update([
                'status' => $request->status,
            ]);
        }
        //return response
        return new YearResource(true, 'Data Year Berhasil Diubah!', $year);
    }
    public function destroy($npsn)
    {
        //find year by ID
        $year = Year::where('npsn', $npsn)->first();
        if (!$year) {
            return response()->json([
                'success' => false,
                'message' => 'Year not found.',
                'data' => null
            ], 404);
        }
        $year->delete();
        return new YearResource(true, 'Data Year Berhasil Dihapus!', null);
    }
}
