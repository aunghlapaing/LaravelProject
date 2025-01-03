<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Http;
use Illuminate\Support\Facades\Route;
use Illuminate\Support\Facades\Session;
use Illuminate\Validation\Rules\Password;


//get post push patch delete option

// Route::redirect('/', 'home', 404);


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

// can add more function in this syntax
Route::get('view', function(){
    return view('admin')->with('key', 'This is message from server site');
});

// for two or more data passing to client side
Route::get ('userPage', function(){
    $data=1;
    $name = '<h1>aungh</h1>';
    return view('user')->with(['key'=>$data,'name'=>$name]);
});

// shortcut
// Route::view('View', 'home');

Route::get('/RouteTesting/{name}', function($name){
    // return view('classroom/fcd');
    // dd($name);

    // to check file name on view by using exits
if(view()->exists('admin')){
    return true;
}else{
    return false;
}
})->name('routetest');

// for different route
Route::get('/register/user', function(){
    return view('classroom/fcd');
})->name('register');

Route::get('/register/user/aunghla', function(){
    return view('classroom/fcd');
})->name('register');

Route::get('HomeBlade',function(){
    return view('home');
});

Route::get('FCD', function(){
    return view('/classroom/fcd');
});

// api fetch using laravel syntax
Route::get('/apiJson', function (){
    $product = Http::get ('https://fakestoreapi.com/products')->json(); //change to json format
    $array_filter = collect($product)->where('price', '<', 10); //laravel syntax for array filter
    dd ($array_filter);

});

Route::get('/apiObj', function (){
    $product = Http::get ('https://fakestoreapi.com/products')->object(); //change to json format
    dd ($product[0]->title);
    // foreach($product as $item){
    //     dd ($item)->title;
    // }
});

// api fetch using php syntax
Route::get('API', function(){
    $product = file_get_contents('https://fakestoreapi.com/products');
    $json_product=json_decode($product);
    $array_filter = array_filter($json_product, fn($item)=>$item->price<50); //array filter
    dd($array_filter);
});

// session in laravel
Route::get ('session', function(){

    // Session::put('data', 'another create type of session');//create
    // Session::get('data');
    // Session::forget('data');
    // Session::all();
    
    session()->put('key', 'this is session message'); //create session for string data type

    $obj = (object) [
        'name' => 'aung',
        'job' => 'programmer'
    ];
    session()->put ('key1', $obj); 
    // dd(session()->get('key1'));

    //to delete the created session;
    // session()->flush();

    // to check the created session
    dd(session()->all()); 

    

    // session()->forget('key');

    if (session()->exists('key')){
        dd(session()->get('key'));
      
    }else{
        dd("don't have data key");
    }
    // $session = session()->get('key');
    // dd($session); 
});

// session in php
Route::get('php', function(){
    echo "<pre>";
    session_start();

    $data = [1,2,3];

    $_SESSION['ary'] = $data;
    print_r($_SESSION['ary']);
});

// Route for Classroom UOS
Route::get('classroom/uos', function(){
    return view('classroom/UOS');

})->name('uos');

// Get data by post method from /classroom/UOS
Route::post ('userData', function( Request $userData){

    // dd($userData->all());
    $name = $userData->uos;
    $classno = $userData->classno;
    dd($name, $classno);
    
});

// Route Home Page
Route:: get('home', function(){
    return view('home');
});

// Route About Page
Route::get ('about', function(){
    return view('about');
});

// Route Service Page
Route::get ('service', function(){
    return view ('service');
});

// Post method from service page && validation 
Route::post('post-service', function( Request $request){
    // dd($request->all());

    $rules = [
        'name'=>'required',
        'gender'=> 'required',
        'phone'=> ['required', 'digits_between:9,9'],
        'email'=> 'required',
        'password'=> ['required', Password::min(8)->mixedCase()->numbers()->symbols()->uncompromised()],
        'confirm-password'=> 'required|same:password'   
    ];
    $message = [
        'name.required' => 'Even Dog has a name?',
        'gender.required' => 'Eeven Dog has a gender?',
        'phone.required' => 'If you are a human, should have a phone number?',
        'phone.digits_between' => 'Phone number should have 9 digts',
        'email.required' => 'If you are a human, should have an email number?',
        'password.required' => 'Set a strong password?',
        'confirm-password.required' => 'Confirm your shit again!'
        
    ];

    $request->validate ($rules, $message);

    // $request->validate([
    //     'name'=>'required',
    //     'gender'=> 'required',
    //     'phone'=> 'required',
    //     'email'=> 'required',
    //     'password'=> 'required',
    //     'confirm-password'=> 'required'
    // ]);
    return "Register success";
} );

// Route for file upload && validation for file
Route::post ('file/upload', function(Request $request){
    // dd($request->all());

    $request->validate([
        'name'=>'required',
        'file'=>'required|mimes:jpeg,jpg,png,gif'
    ]);

    $file = $request->file('file');
    $file_name = uniqid(). $file->getClientOriginalname();
    $file->move( public_path() . '/image/', $file_name );

    dd($request->all());
})->name('file');