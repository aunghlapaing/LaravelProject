<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class userController extends Controller
{
    public function create($name){
        return view('user', compact('name')); //data catch with compact
        // return view('user')->with ('name');
    }

    public function update(){
        return "this is update function";
    }

    public function delete(){
        return "this is delete fucntion";
    }

    public function search(){
        return "this is search function";
    }

}
