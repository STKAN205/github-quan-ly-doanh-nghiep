<!DOCTYPE html>
<html lang="vi">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Hệ thống Quản lý Nhân sự</title>
    <link rel="stylesheet" href="{{ asset('fontend/css/styles.css') }}">
</head>
<body>
    <div class="container">
        <!-- Sidebar -->
        <aside class="sidebar">
                <div class="logo">
                    <a href="/trang-chu">
                        <img src="{{ asset('fontend/images/logoHR.png') }}" alt="Logo công ty">
                    </a>
                </div>
            <nav class="menu">
                    <ul>
                        <li><a href="/trang-chu" class="{{ request()->is('trang-chu') ? 'active' : '' }}">🏠 Trang chủ</a></li>
                        <li><a href="/employee" class="{{ request()->is('employee') ? 'active' : '' }}">🧑‍💼 Quản lý nhân viên</a></li>
                        <li><a href="/departments" class="{{ request()->is('departments') ? 'active' : '' }}">🏢 Quản lý phòng ban & chức vụ</a></li>
                        <li><a href="/attendance" class="{{ request()->is('attendance') ? 'active' : '' }}">⏱️ Quản lý chấm công</a></li>
                        <li><a href="/salary" class="{{ request()->is('salary') ? 'active' : '' }}">💰 Quản lý lương & thu nhập</a></li>
                        <li><a href="/contracts" class="{{ request()->is('contracts') ? 'active' : '' }}">📄 Quản lý hợp đồng lao động</a></li>
                        <li><a href="/report" class="{{ request()->is('report') ? 'active' : '' }}">📊 Quản lý báo cáo</a></li>
                        <li><a href="/notifications" class="{{ request()->is('notifications') ? 'active' : '' }}">🔔 Quản lý thông báo</a></li>
                        <li><a href="/support" class="{{ request()->is('support') ? 'active' : '' }}">🆘 Hỗ trợ</a></li>
                    </ul>
            </nav>
        </aside>

        <!-- Content -->
        <div class="content">
            <!-- Header -->
            <header class="header">
                <div class="search">
                    <input type="text" placeholder="Tìm kiếm...">
                </div>
                <div class="user-actions">
                    <span class="notif">🔔</span>
                    <span class="user">👤 Admin</span>
                </div>
            </header>

            <!-- Main -->
            <main class="main">
                <h1>Dashboard</h1>
                <div class="cards">
                    <div class="card">Tổng số nhân viên: 120</div>
                    <div class="card">Phòng ban: 5</div>
                    <div class="card">Hợp đồng sắp hết hạn: 3</div>
                </div>
            </main>

            <!-- Footer -->
            <footer class="footer">
                <p>© 2025 Hệ thống Quản lý Nhân sự | Version 1.0</p>
            </footer>
        </div>
    </div>

    <script src="{{ asset('fontend/js/script.js') }}"></script>
</body>
</html>
