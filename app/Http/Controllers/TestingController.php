<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class TestingController extends Controller
{
    public function controllerTesting(){
        $test = "This is controller Testing";
        dd($test);
    }
}
