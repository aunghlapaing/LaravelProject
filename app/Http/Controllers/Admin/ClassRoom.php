<?php

namespace App\Http\Controllers\Admin;

use Illuminate\Http\Request;

use App\Models\ClassRoomModel;
use App\Http\Controllers\Controller;

class ClassRoom extends Controller
{
    public function insert (){
        $insert = [
            'name'=>'ClassRoom',
            'student_name'=>'aung hla'
        ];

        ClassRoomModel::create($insert);

        // dd('insert success');

        ClassRoomModel::select($data);
    }
}
