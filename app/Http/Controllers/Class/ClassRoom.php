<?php

namespace App\Http\Controllers\Class;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class ClassRoom extends Controller
{
    public function insert(){
        $data = [
            'name'=> 'Class_1',
            'student_name'=> 'Aung Hla'
        ];

        Classroom::create($data);
        dd('insert success');
    }
}
