<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class ClassRoomModel extends Model
{
    use HasFactory;

    protected $table = 'class_rooms';
    protected $fillable = ['name', 'student_name'];
}
