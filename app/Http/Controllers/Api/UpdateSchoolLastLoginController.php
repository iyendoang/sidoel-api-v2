<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use App\Http\Resources\SchoolResource;
use App\Models\School;
use Illuminate\Http\Request;
use Illuminate\Support\Carbon;

class UpdateSchoolLastLoginController extends Controller
{
    public function __invoke(Request $request, $npsn)
    {
        $school = School::where('npsn', $npsn)->first();
        if (!$school) {
            return response()->json([
                'success' => false,
                'message' => 'School not found.',
                'data' => null
            ], 404);
        }
        if ($school->end_date < Carbon::now()) {
            return response()->json([
                'success' => false,
                'message' => 'The validity period for ' . $school->name . ' has expired. Please re-register with the Sidoel admin.',
                'data' => null
            ], 404);
        }
        $school->update([
            'last_login' => Carbon::now()
        ]);
        return new SchoolResource(true, 'Last login updated successfully!', $school);
    }
}
