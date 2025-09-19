<!DOCTYPE html>
<html lang="vi">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Hệ thống Quản lý Nhân sự</title>
    <link rel="stylesheet" href="fontend/css/styles.css">
</head>
<body>
    <div class="container">
        <!-- Sidebar -->
        <aside class="sidebar">
            <div class="logo">
                <h2>HRM</h2>
            </div>
            <nav class="menu">
                <ul>
                    <li><a href="/employee">🧑‍💼 Quản lý nhân viên</a></li>
                    <li><a href="#">🏢 Quản lý phòng ban & chức vụ</a></li>
                    <li><a href="#">⏱️ Quản lý chấm công</a></li>
                    <li><a href="#">💰 Quản lý lương & thu nhập</a></li>
                    <li><a href="#">📄 Quản lý hợp đồng lao động</a></li>
                    <li><a href="#">📊 Quản lý báo cáo</a></li>
                    <li><a href="#">🔔 Quản lý thông báo</a></li>
                    <li><a href="#">🆘 Hỗ trợ</a></li>
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

    <script src="fontend/js/script.js"></script>
</body>
</html>
