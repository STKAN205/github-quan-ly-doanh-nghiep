<!DOCTYPE html>
<html lang="vi">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Hệ thống Quản lý Nhân sự</title>
    <link rel="stylesheet" href="{{ asset('frontend/css/styles.css') }}">
    <link rel="stylesheet" href="{{ asset('frontend/css/salary.css') }}">
</head>
<body>
    <div class="container">
        {{-- Sidebar --}}
            @include('frontend.partials.sidebar')

        <!-- Content -->
        <div class="content">
            {{-- Header --}}
            @include('frontend.partials.header')

            {{-- Nội dung chính (demo) --}}
            <!-- Main -->
            <div class="salary-container">

                <!-- Toolbar -->
                <div class="salary-toolbar">
                <button class="btn btn-add">+ Thêm bảng lương</button>
                <input type="text" class="search-input" placeholder="Tìm kiếm nhân viên...">
                <select class="filter-select">
                    <option>Tháng 9/2025</option>
                    <option>Tháng 8/2025</option>
                    <option>Tháng 7/2025</option>
                </select>
                </div>

                <!-- Salary Table -->
                <table class="salary-table">
                <thead>
                    <tr>
                    <th>Mã NV</th>
                    <th>Họ và Tên</th>
                    <th>Phòng ban</th>
                    <th>Lương cơ bản</th>
                    <th>Phụ cấp</th>
                    <th>Thưởng</th>
                    <th>Khấu trừ</th>
                    <th>Tổng nhận</th>
                    <th>Thao tác</th>
                    </tr>
                </thead>
                <tbody>
                    <tr>
                    <td>NV001</td>
                    <td>Nguyễn Văn A</td>
                    <td>Kế toán</td>
                    <td>10,000,000</td>
                    <td>2,000,000</td>
                    <td>1,000,000</td>
                    <td>1,500,000</td>
                    <td>11,500,000</td>
                    <td>
                        <button class="btn btn-view" onclick="openPopup('Nguyễn Văn A')">Xem</button>
                        <button class="btn btn-edit">Sửa</button>
                        <button class="btn btn-delete">Xóa</button>
                    </td>
                    </tr>
                </tbody>
                </table>
            </div>

            {{-- Footer --}}
            @include('frontend.partials.footer')
        </div>
    </div>

    <!-- Popup -->
    <div class="popup" id="popup">
        <div class="popup-content">
        <span class="close" onclick="closePopup()">&times;</span>
        <h2>Chi tiết lương</h2>
        <p><b>Nhân viên:</b> <span id="popup-name"></span></p>
        <table class="popup-table">
            <tr><td>Lương cơ bản</td><td>10,000,000</td></tr>
            <tr><td>Phụ cấp</td><td>2,000,000</td></tr>
            <tr><td>Thưởng</td><td>1,000,000</td></tr>
            <tr><td>Khấu trừ</td><td>1,500,000</td></tr>
            <tr class="highlight"><td>Tổng thực nhận</td><td>11,500,000</td></tr>
        </table>
        </div>
    </div>
    
    <script src="{{ asset('frontend/js/salary.js') }}"></script>
    <script src="{{ asset('frontend/js/script.js') }}"></script>
</body>
</html>
