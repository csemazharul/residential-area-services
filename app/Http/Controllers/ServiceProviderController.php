<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ServiceProviderController extends Controller
{
    public function index(){
        return view('service-provider.dashboard');
    }

    public function serviceStore(Request $request){
        return view('service-provider.service-store');
    }
}
