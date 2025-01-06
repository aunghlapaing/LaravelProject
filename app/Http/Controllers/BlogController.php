<?php

namespace App\Http\Controllers;

use App\Models\Blog;
use Illuminate\Http\Request;
use Illuminate\Support\Carbon;

class BlogController extends Controller
{
    public function create(){
        

        // insert data into table in laravel old version
        // $record = new Blog();
        // $record->name='New Blog';
        // $record->title='Example';
        // $record->dob=Carbon::now(); //current date time
        // $record->save();

        //insert data into table using query builder in new version of laravel
        Blog::create([
            'name'=> 'Testing',
            'title'=> 'Testing',
            'dob' => Carbon::now()
        ]);

        dd('This is create function from contoller');

    }

    public function read(){
        // dd('this is read function from controller');

        /*
        get(); or all(); to retrive all the row but all() is not use for condition statement
        frist(); firt row of the table
        find();
        findOrfail();
        */

        // $data = Blog::select('id','name','title')
        // ->where('id','2')
        // ->orderby('created_at', 'desc')
        // ->get();
        // dd($data->toArray());

        // $read = Blog::first();

        // $read = Blog::find(2); //shortcut for sql

        // $read = Blog::findOrfail(20);

        // $read = Blog::where('id',20)->get();

        $read = Blog::get();

        foreach($read as $item){
            echo $item['title'] .  "<br>";
        }
        $detail = Blog::where('id', $id)->first();

        dd($detail->title);

        dd($detail->toArray());
    }

    public function update($id){
        $update = [
            'name'=> 'name update',
            'title'=> 'title update'
        ];
        
        // Blog::where('id', $id)->update($update);
        Blog::find($id)->update($update);

        dd ('update success');
    }

    public function delete($id){
        // dd('this is delete function from controller');

        Blog::find($id)->delete();

        dd('Delete success');
    }
}
