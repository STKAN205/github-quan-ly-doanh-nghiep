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
        {{-- Sidebar --}}
            @include('fontend.partials.sidebar')

        <!-- Content -->
        <div class="content">
            {{-- Header --}}
            @include('fontend.partials.header')

            {{-- Nội dung chính (demo) --}}
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

            {{-- Footer --}}
            @include('fontend.partials.footer')
        </div>
    </div>

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
    <script src="{{ asset('fontend/js/script.js') }}"></script>
</body>
</html>
