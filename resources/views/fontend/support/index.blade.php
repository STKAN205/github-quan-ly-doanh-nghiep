<!DOCTYPE html>
<html lang="vi">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Hệ thống Quản lý Nhân sự</title>
    <link rel="stylesheet" href="{{ asset('fontend/css/styles.css') }}">
    <link rel="stylesheet" href="{{ asset('fontend/css/support.css') }}">
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
            <div class="support-container">
            <h2>Hệ thống hỗ trợ</h2>
            <button class="btn-add" onclick="openSupportForm()">+ Gửi yêu cầu hỗ trợ</button>

            <table class="support-table">
                <thead>
                    <tr>
                        <th>Mã YC</th>
                        <th>Tiêu đề</th>
                        <th>Ngày gửi</th>
                        <th>Người gửi</th>
                        <th>Trạng thái</th>
                        <th>Thao tác</th>
                    </tr>
                </thead>
                <tbody>
                    <tr>
                        <td>YC001</td>
                        <td>Lỗi không đăng nhập được</td>
                        <td>18/09/2025</td>
                        <td>Nguyễn Văn A</td>
                        <td>Chờ xử lý</td>
                        <td>
                            <button class="btn-view" onclick="openSupportDetail()">Xem</button>
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

    <!-- Popup Gửi yêu cầu -->
    <div id="supportFormPopup" class="popup">
        <div class="popup-content">
            <h3>Gửi yêu cầu hỗ trợ</h3>
            <label>Tiêu đề:</label>
            <input type="text" id="supportTitle">

            <label>Loại yêu cầu:</label>
            <select id="supportType">
                <option value="bug">Báo lỗi hệ thống</option>
                <option value="help">Yêu cầu hỗ trợ</option>
                <option value="feedback">Góp ý</option>
            </select>

            <label>Mức độ ưu tiên:</label>
            <select id="supportPriority">
                <option value="low">Thấp</option>
                <option value="medium">Trung bình</option>
                <option value="high">Cao</option>
            </select>

            <label>Nội dung chi tiết:</label>
            <textarea id="supportContent"></textarea>

            <div class="popup-actions">
                <button onclick="saveSupport()">Gửi</button>
                <button onclick="closePopup()">Hủy</button>
            </div>
        </div>
    </div>

    <!-- Popup Chi tiết yêu cầu -->
    <div id="supportDetailPopup" class="popup">
        <div class="popup-content">
            <h3>Chi tiết yêu cầu hỗ trợ</h3>
            <p><b>Tiêu đề:</b> Lỗi không đăng nhập được</p>
            <p><b>Loại yêu cầu:</b> Báo lỗi hệ thống</p>
            <p><b>Mức độ ưu tiên:</b> Cao</p>
            <p><b>Nội dung:</b> Khi nhập đúng tài khoản vẫn không đăng nhập được.</p>
            <p><b>Trạng thái:</b> Chờ xử lý</p>
            <div class="popup-actions">
                <button onclick="closePopup()">Đóng</button>
            </div>
        </div>
    </div>

    <script src="{{ asset('fontend/js/support.js') }}"></script>
</body>
</html>
