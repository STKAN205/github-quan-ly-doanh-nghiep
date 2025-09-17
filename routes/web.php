<?php

use Illuminate\Support\Facades\Route;

Route::get('/showtable', function () {
    return view('fontend/test');
});

#demo datatables
use App\Http\Controllers\Persion_controller;
Route::get('/dataTables/person', [Persion_controller::class, 'index']);