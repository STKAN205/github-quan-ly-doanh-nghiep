<!DOCTYPE html>
<html lang="vi">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Hệ thống Quản lý Nhân sự</title>
    <link rel="stylesheet" href="{{ asset('fontend/css/styles.css') }}">
    <link rel="stylesheet" href="{{ asset('fontend/css/reports.css') }}">
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
                    <li><a href="/departments">🏢 Quản lý phòng ban & chức vụ</a></li>
                    <li><a href="/attendance">⏱️ Quản lý chấm công</a></li>
                    <li><a href="/salary">💰 Quản lý lương & thu nhập</a></li>
                    <li><a href="/contracts">📄 Quản lý hợp đồng lao động</a></li>
                    <li><a href="/report">📊 Quản lý báo cáo</a></li>
                    <li><a href="/notifications">🔔 Quản lý thông báo</a></li>
                    <li><a href="/support">🆘 Hỗ trợ</a></li>
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
            <div class="report-container">

                <!-- Toolbar -->
                <div class="report-toolbar">
                <select class="filter-select" id="report-type">
                    <option>Chọn loại báo cáo</option>
                    <option>Nhân sự</option>
                    <option>Chấm công</option>
                    <option>Lương</option>
                    <option>Hợp đồng</option>
                </select>
                <input type="date" id="from-date">
                <input type="date" id="to-date">
                <button class="btn btn-export">📄 Xuất PDF</button>
                <button class="btn btn-export">⬇ Xuất Excel</button>
                <button class="btn btn-chart" onclick="toggleChart()">📊 Xem biểu đồ</button>
                </div>

                <!-- Bảng dữ liệu -->
                <table class="report-table">
                <thead>
                    <tr>
                    <th>Mã NV</th>
                    <th>Họ và Tên</th>
                    <th>Phòng ban</th>
                    <th>Ngày</th>
                    <th>Tổng giờ làm</th>
                    </tr>
                </thead>
                <tbody>
                    <tr onclick="openPopup('Nguyễn Văn A')">
                    <td>NV001</td>
                    <td>Nguyễn Văn A</td>
                    <td>Kinh doanh</td>
                    <td>01/09/2025</td>
                    <td>8h</td>
                    </tr>
                    <tr onclick="openPopup('Trần Thị B')">
                    <td>NV002</td>
                    <td>Trần Thị B</td>
                    <td>Nhân sự</td>
                    <td>01/09/2025</td>
                    <td>7h30</td>
                    </tr>
                </tbody>
                </table>

                <!-- Biểu đồ -->
                <div class="chart-container" id="chart-container">
                <canvas id="reportChart"></canvas>
                </div>
            </div>


            <!-- Footer -->
            <footer class="footer">
                <p>© 2025 Hệ thống Quản lý Nhân sự | Version 1.0</p>
            </footer>
        </div>
    </div>

    <!-- Popup -->
    <div class="popup" id="popup">
        <div class="popup-content">
        <span class="close" onclick="closePopup()">&times;</span>
        <h2>Chi tiết báo cáo</h2>
        <p><b>Nhân viên:</b> <span id="popup-name"></span></p>
        <p><b>Ngày:</b> 01/09/2025</p>
        <p><b>Tổng giờ làm:</b> 8h</p>
        <p><b>Phòng ban:</b> Kinh doanh</p>
        </div>
    </div>
    
    <script src="{{ asset('fontend/js/reports.js') }}"></script>
</html>
