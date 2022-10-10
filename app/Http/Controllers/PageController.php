<?php

namespace App\Http\Controllers;

class PageController extends Controller
{
    public function contactUs(){
        return view('frontend.contact-us');
    }

    public function aboutUs(){
        return view('frontend.about-us');
    }

}
