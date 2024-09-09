<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class FrontendController extends Controller
{
    public function dashboard(){
        return view('layouts.master');
    }
    public function index(){
        return view('layouts.index');
    }
}
