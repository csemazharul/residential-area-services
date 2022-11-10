<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class SocietyManagerController extends Controller
{
    public function index()
    {
        return view('society-manager.dashboard');
    }
}
