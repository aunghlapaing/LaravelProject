<?php

use Illuminate\Support\Facades\Route;

//get post push patch delete option

// Route::redirect('/', 'home', 404);

Route::get('/home', function (){
    // echo "This is home page, testing laravel route get";
    $arr = [1,2,3,4,5];

    // print_r($arr);
    // dd($arr);

    logger($arr);

    echo "this is testing for dd()";
});


Route::get('/about', function (){
    echo "This is about page, testing laravel route get";
});


Route::get('/redirect', function (){
    return redirect()->route('testing', 'aung@gmail.com', '123');
    // return to_route('testing', 'aung@gmail.com', '123');
});


// should be specific the route name to use the parameter passing
Route::get('/home/contact/{email}/{pass}', function ($email, $pass){
    echo "This is home/contact page, testing laravel route get";
    return dd($email, $pass);
})->name('testing');

Route::get('/test/{num1}/{num2}', function($num1, $num2){
    dd ($num1+$num2);
});

// default value parameter passing
Route::get('/default/{default?}', function($default="Default Value"){
    return response()->json($default);
});



