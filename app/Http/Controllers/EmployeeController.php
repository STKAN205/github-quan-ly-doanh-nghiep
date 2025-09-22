<?php

// app/Http/Controllers/EmployeeController.php
namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Employee;

class EmployeeController extends Controller
{
    public function index()
    {
        // Lấy tất cả nhân viên kèm tên phòng ban
        $employees = Employee::with('department')->get();

        // Trả dữ liệu ra view
        return view('frontend.employees.index', [
            'employees' => $employees
        ]);
    }
}

