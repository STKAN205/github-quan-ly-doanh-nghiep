<!DOCTYPE html>
<html lang="vi">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>@yield('title', 'Hệ thống Quản lý nhân sự')</title>
    <!-- CSS chung -->
    <link rel="stylesheet" href="{{ asset('fontend/css/styles.css') }}">
    @stack('styles')
</head>
<body>
    <div class="container">

        <!-- Sidebar -->
        <aside class="sidebar">
            <h2>HRM System</h2>
            <ul>
                <li><a href="{{ url('/employee') }}">👨‍💼 Quản lý nhân viên</a></li>
                <li><a href="{{ url('/department') }}">🏢 Quản lý phòng ban & chức vụ</a></li>
                <li><a href="{{ url('/attendance') }}">🕒 Quản lý chấm công</a></li>
                <li><a href="{{ url('/salary') }}">💰 Quản lý lương & thu nhập</a></li>
                <li><a href="{{ url('/contract') }}">📑 Quản lý hợp đồng lao động</a></li>
                <li><a href="{{ url('/report') }}">📊 Quản lý báo cáo</a></li>
                <li><a href="{{ url('/notification') }}">🔔 Hệ thống thông báo</a></li>
                <li><a href="{{ url('/support') }}">❓ Hỗ trợ</a></li>
            </ul>
        </aside>

        <!-- Nội dung bên phải -->
        <div class="content-area">

            <!-- Header -->
            <header class="header">
                <h1>@yield('title', 'Hệ thống Quản lý nhân sự')</h1>
                <div class="user-info">
                    <span>Xin chào, Admin</span>
                    <a href="{{ url('/logout') }}" class="logout">Đăng xuất</a>
                </div>
            </header>

            <!-- Main Content -->
            <main class="main">
                @yield('content')
            </main>

            <!-- Footer -->
            <footer class="footer">
                <p>&copy; {{ date('Y') }} Hệ thống Quản lý nhân sự. All rights reserved.</p>
            </footer>

        </div>
    </div>

    <!-- JS chung -->
    <script src="{{ asset('fontend/js/script.js') }}"></script>
    @stack('scripts')
</body>
</html>
