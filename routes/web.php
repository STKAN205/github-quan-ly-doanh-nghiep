<?php

use Illuminate\Support\Facades\Route;

Route::get('/trang-chu', function () {
    return view('index');
});

Route::get('/employee', function () {
    return view('fontend/employees/index');
});

Route::get('/departments', function () {
    return view('fontend/departments/index');
});

Route::get('/attendance', function () {
    return view('fontend/attendance/index');
});

Route::get('/salary', function () {
    return view('fontend/salary/index');
});

Route::get('/contracts', function () {
    return view('fontend/contracts/index');
});

Route::get('/report', function () {
    return view('fontend/reports/index');
});

Route::get('/notifications', function () {
    return view('fontend/notifications/index');
});

Route::get('/support', function () {
    return view('fontend/support/index');
});

Route::get('/layouts', function () {
    return view('fontend/layouts/layout');
});