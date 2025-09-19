<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('index');
});

Route::get('/employee', function () {
    return view('fontend/employees/index');
});
