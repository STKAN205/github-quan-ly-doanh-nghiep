<!DOCTYPE html>
<html lang="vi">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Hệ thống Quản lý Nhân sự</title>
    <link rel="stylesheet" href="{{ asset('fontend/css/styles.css') }}">
    <link rel="stylesheet" href="{{ asset('fontend/css/notifications.css') }}">
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
            <div class="notification-container">
                <h2>Quản lý thông báo</h2>
                <button class="btn-add" onclick="openAddForm()">+ Thêm thông báo</button>

                <table class="notification-table">
                    <thead>
                        <tr>
                            <th>Mã TB</th>
                            <th>Tiêu đề</th>
                            <th>Ngày gửi</th>
                            <th>Người gửi</th>
                            <th>Trạng thái</th>
                            <th>Thao tác</th>
                        </tr>
                    </thead>
                    <tbody>
                        <tr>
                            <td>TB001</td>
                            <td>Thông báo nghỉ lễ 2/9</td>
                            <td>25/08/2025</td>
                            <td>Admin</td>
                            <td>Đã gửi</td>
                            <td>
                                <button class="btn-view" onclick="openDetail()">Xem</button>
                                <button class="btn-edit" onclick="openEditForm()">Sửa</button>
                                <button class="btn-delete">Xóa</button>
                            </td>
                        </tr>
                    </tbody>
                </table>
            </div>

            <!-- Footer -->
            <footer class="footer">
                <p>© 2025 Hệ thống Quản lý Nhân sự | Version 1.0</p>
            </footer>

    <!-- Popup Chi tiết -->
    <div id="detailPopup" class="popup">
        <div class="popup-content">
            <h3>Chi tiết thông báo</h3>
            <p><b>Tiêu đề:</b> Thông báo nghỉ lễ 2/9</p>
            <p><b>Nội dung:</b> Công ty sẽ nghỉ lễ từ 31/8 đến 2/9</p>
            <p><b>Người nhận:</b> Toàn công ty</p>
            <p><b>Ngày gửi:</b> 25/08/2025</p>
            <div class="popup-actions">
                <button onclick="closePopup()">Đóng</button>
            </div>
        </div>
    </div>
    <!-- Popup Thêm/Sửa -->
    <div id="formPopup" class="popup">
        <div class="popup-content">
            <h3 id="formTitle">Thêm thông báo</h3>
            <label>Tiêu đề:</label>
            <input type="text" id="titleInput">

            <label>Nội dung:</label>
            <textarea id="contentInput"></textarea>

            <label>Người nhận:</label>
            <select id="receiverInput">
                <option value="all">Toàn công ty</option>
                <option value="department">Theo phòng ban</option>
                <option value="personal">Cá nhân</option>
            </select>

            <label>Ngày giờ gửi:</label>
            <input type="datetime-local" id="timeInput">

            <div class="popup-actions">
                <button onclick="saveNotification()">Lưu</button>
                <button onclick="closePopup()">Hủy</button>
            </div>
        </div>
    </div>

    <script src="{{ asset('fontend/js/notifications.js') }}"></script>
</body>
</html>
