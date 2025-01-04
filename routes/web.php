<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\TestingController;
use App\Http\Controllers\Admin\userController;
use App\Http\Controllers\Admin\adminController;

// controller testing | Laravel power using OOP concept | Design pattern is model view controller (MVC)
Route::get ('controller', [adminController::class, 'admin']);

Route::get ('controller/testing', [TestingController::class, 'controllerTesting'])->name('Testing');

// Controller by using group
Route::group (['prefix'=>'user'], function(){
    Route::get('create/{name}', [userController::class, 'create'])->name('userCreate');
    Route::get('update', [userController::class, 'update'])->name('userUpdate');
    Route::get('delete', [userController::class, 'delete'])->name('userDelete');
    Route::get('search', [userController::class, 'search'])->name('userSearch');
});