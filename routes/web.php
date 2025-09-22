<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\LoginController;
// routes/web.php
use App\Http\Controllers\EmployeeController;


Route::get('/trang-chu', function () {
    return view('index');
});

Route::get('/employee', function () {
    return view('frontend/employees/index');
});

Route::get('/departments', function () {
    return view('frontend/departments/index');
});

Route::get('/attendance', function () {
    return view('frontend/attendance/index');
});

Route::get('/salary', function () {
    return view('frontend/salary/index');
});

Route::get('/contracts', function () {
    return view('frontend/contracts/index');
});

Route::get('/report', function () {
    return view('frontend/reports/index');
});

Route::get('/notifications', function () {
    return view('frontend/notifications/index');
});

Route::get('/support', function () {
    return view('frontend/support/index');
});

Route::get('/layouts', function () {
    return view('frontend/layouts/layout');
});

Route::get('/login', function () {
    return view('frontend.auth.login'); 
})->name('login');

Route::get('/users', function () {
    return view('frontend.users.index'); 
});


Route::get('/login', [LoginController::class, 'showLoginForm'])->name('login');
Route::post('/login', [LoginController::class, 'login'])->name('login.post');
Route::get('/logout', [LoginController::class, 'logout'])->name('logout');

Route::get('/employees', [EmployeeController::class, 'index'])->name('employees.index');