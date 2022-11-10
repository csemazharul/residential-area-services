<?php

namespace App\Http\Controllers;

use App\Models\Districts;
use App\Models\Divisions;
use App\Models\Unions;
use App\Models\Upazilas;

class PageController extends Controller
{

    public function index()
    {
        $divisions = Divisions::all();
        return view('welcome', compact('divisions'));
    }

    public function contactUs(){
        return view('frontend.contact-us');
    }

    public function aboutUs(){
        return view('frontend.about-us');
    }

    public function district($id){
        $districts = Districts::find($id);
        return response()->json($districts);
    }

    public function upazila($id){
        $division = Upazilas::find($id);
        return view('frontend.division', compact('division'));
    }

    public function unions($id){
        $division = Unions::find($id);
        return view('frontend.division', compact('division'));
    }

}
