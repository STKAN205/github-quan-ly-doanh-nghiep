<!DOCTYPE html>
<html lang="vi">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Hệ thống Quản lý Nhân sự</title>
    <link rel="stylesheet" href="{{ asset('frontend/css/styles.css') }}">
    <link rel="stylesheet" href="{{ asset('frontend/css/employee.css') }}">
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
                <div class="employee-container">

                <!-- Thanh công cụ -->
                <div class="employee-toolbar">
                    <button class="btn btn-add">+ Thêm nhân viên</button>
                    <input type="text" class="search-input" placeholder="Tìm kiếm nhân viên...">
                </div>

                <!-- Bảng danh sách nhân viên -->
                <table class="employee-table">
                    <thead>
                        <tr>
                            <th>Mã NV</th>
                            <th>Họ và Tên</th>
                            <th>Phòng ban</th>
                            <th>Chức vụ</th>
                            <th>Email</th>
                            <th>SĐT</th>
                            <th>Thao tác</th>
                        </tr>
                    </thead>
                    <tbody>
                        <!-- Ví dụ dữ liệu -->
                        <tr>
                            <td>NV001</td>
                            <td>Nguyễn Văn A</td>
                            <td>Kế toán</td>
                            <td>Trưởng phòng</td>
                            <td>a.nguyen@example.com</td>
                            <td>0912345678</td>
                            <td></td>
                        </tr>
                    </tbody>
                </table>
            </div>

            {{-- Footer --}}
            @include('frontend.partials.footer')
        </div>
    </div>

    <!-- Popup -->
    <div id="viewDetail" class="viewDetail">
        <div class="viewDetail-content">
            <span class="close" onclick="closeModal()">&times;</span>
            <h2>Chi tiết nhân viên</h2>
            <p><strong>Mã NV:</strong> <span id="detail-id"></span></p>
            <p><strong>Họ và Tên:</strong> <span id="detail-name"></span></p>
            <p><strong>Phòng ban:</strong> <span id="detail-dept"></span></p>
            <p><strong>Chức vụ:</strong> <span id="detail-role"></span></p>
            <p><strong>Email:</strong> <span id="detail-email"></span></p>
            <p><strong>SĐT:</strong> <span id="detail-phone"></span></p>
        </div>
        <span class="close" onclick="closeModal()">&times;</span>
    </div>

    <script src="{{ asset('frontend/js/script.js') }}"></script>
    <script src="{{ asset('frontend/js/employee.js') }}"></script>
</body>
</html>
