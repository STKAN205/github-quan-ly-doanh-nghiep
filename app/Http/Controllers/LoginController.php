<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class LoginController extends Controller
{
    // Hiển thị form login
    public function showLoginForm()
    {
        return view('frontend.auth.login');
    }

    // Xử lý login
    public function login(Request $request)
    {
        $email = $request->input('email');
        $password = $request->input('password');

        // Demo tài khoản (sau này thay bằng DB)
        $validEmail = "admin";
        $validPass  = "1";

        if ($email === $validEmail && $password === $validPass) {
            // Đúng → về trang chủ
            return redirect('/trang-chu');
        } else {
            // Sai → quay lại login kèm thông báo
            return redirect()->route('login')
                             ->with('error', 'Nhập sai tên đăng nhập và mật khẩu');
        }
    }

    // Đăng xuất (demo)
    public function logout(Request $request)
    {
        // Xử lý logout ở đây (xóa session, auth...)
        return redirect()->route('login');
    }
}
