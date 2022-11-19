<?php

namespace App\Http\Controllers;

use App\Models\Districts;
use App\Models\Unions;
use App\Models\Upazilas;
use Illuminate\Http\Request;

class HelperController extends Controller
{
    public function getDistrict(Request $request){
        $division_id = $request->division_id;
        $districts = Districts::where('division_id', $division_id)->get();
        return response()->json($districts);
    }

    public function getUpazila(Request $request){
        $district_id = $request->district_id;
        $upazilas = Upazilas::where('district_id', $district_id)->get();
        return response()->json($upazilas);
    }

    public function getUnion(Request $request){
        $upazila_id = $request->upazila_id;
        $unions = Unions::where('upazila_id', $upazila_id)->get();
        return response()->json($unions);
    }
}
