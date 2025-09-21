<!DOCTYPE html>
<html lang="vi">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Hệ thống Quản lý Nhân sự</title>
    <link rel="stylesheet" href="{{ asset('fontend/css/styles.css') }}">
    <link rel="stylesheet" href="{{ asset('fontend/css/attendance.css') }}">
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
            <div class="attendance-container">

                <!-- Toolbar -->
                <div class="attendance-toolbar">
                    <button class="btn btn-add">+ Thêm bản ghi</button>
                    <select class="filter-month">
                        <option>09/2025</option>
                        <option>08/2025</option>
                        <option>07/2025</option>
                    </select>
                    <select class="filter-department">
                        <option>Tất cả phòng ban</option>
                        <option>Kế toán</option>
                        <option>Nhân sự</option>
                        <option>IT</option>
                    </select>
                    <input type="text" placeholder="Tìm nhân viên...">
                    <button class="btn btn-export">⬇ Xuất Excel</button>
                </div>

                <!-- Bảng chấm công -->
                <table class="attendance-table">
                    <thead>
                        <tr>
                            <th>Mã NV</th>
                            <th>Họ và Tên</th>
                            <th>Phòng ban</th>
                            <th>Ngày</th>
                            <th>Giờ vào</th>
                            <th>Giờ ra</th>
                            <th>Giờ làm</th>
                            <th>Tăng ca</th>
                            <th>Trạng thái</th>
                            <th>Thao tác</th>
                        </tr>
                    </thead>
                    <tbody>
                        <tr>
                            <td>NV001</td>
                            <td>Nguyễn Văn A</td>
                            <td>Kế toán</td>
                            <td>19/09/2025</td>
                            <td>08:00</td>
                            <td>17:00</td>
                            <td>8h</td>
                            <td>0h</td>
                            <td><span class="status ontime">Đúng giờ</span></td>
                            <td>
                                <button class="btn btn-view" onclick="openDetail()">👁</button>
                                <button class="btn btn-edit">✏</button>
                                <button class="btn btn-delete">🗑</button>
                            </td>
                        </tr>
                        <tr>
                            <td>NV002</td>
                            <td>Trần Thị B</td>
                            <td>Nhân sự</td>
                            <td>19/09/2025</td>
                            <td>08:20</td>
                            <td>17:10</td>
                            <td>7h50</td>
                            <td>0h</td>
                            <td><span class="status late">Đi trễ</span></td>
                            <td>
                                <button class="btn btn-view" onclick="openDetail()">👁</button>
                                <button class="btn btn-edit">✏</button>
                                <button class="btn btn-delete">🗑</button>
                            </td>
                        </tr>
                    </tbody>
                </table>

                <!-- Thống kê nhanh -->
                <div class="attendance-summary">
                    <p><strong>Tổng ngày làm:</strong> 20</p>
                    <p><strong>Ngày nghỉ phép:</strong> 2</p>
                    <p><strong>Số ngày đi trễ:</strong> 1</p>
                    <p><strong>Tổng giờ tăng ca:</strong> 5h</p>
                </div>
            </div>


            <!-- Footer -->
            <footer class="footer">
                <p>© 2025 Hệ thống Quản lý Nhân sự | Version 1.0</p>
            </footer>
        </div>
    </div>
    
    <!-- Popup chi tiết -->
    <div id="detailPopup" class="popup">
        <div class="popup-content">
            <span class="close" onclick="closeDetail()">&times;</span>
            <h2>Chi tiết chấm công</h2>
            <p><strong>Mã NV:</strong> NV001</p>
            <p><strong>Họ tên:</strong> Nguyễn Văn A</p>
            <p><strong>Phòng ban:</strong> Kế toán</p>
            <p><strong>Ngày:</strong> 19/09/2025</p>
            <p><strong>Check-in:</strong> 08:00</p>
            <p><strong>Check-out:</strong> 17:00</p>
            <p><strong>Ca làm việc:</strong> Sáng + Chiều</p>
            <p><strong>Ghi chú:</strong> Không</p>
        </div>
    </div>

    <script src="{{ asset('fontend/js/attendance.js') }}"></script>
</body>
</html>
