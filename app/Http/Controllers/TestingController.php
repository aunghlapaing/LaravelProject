<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class TestingController extends Controller
{
    public function homeTesting(){
        return view('home');
    }
    public function aboutTesting(){
        return view('about');
    }
    public function serviceTesting(){
        return view('service');
    }
    public function fileUpload(Request $request){
        dd($request->all());
    }
}
