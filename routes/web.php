<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('fontend/index');
});

Route::get('/login', function () {
    return view('fontend/login'); 
});

Route::get('/forgot', function () {
    return view('/fontend/forgot'); 
});

Route::get('/employee', function () {
    return view('/fontend/employee'); 
});

#demo datatables
use App\Http\Controllers\Persion_controller;
Route::get('/dataTables/person', [Persion_controller::class, 'index']);

