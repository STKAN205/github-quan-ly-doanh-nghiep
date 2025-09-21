<!DOCTYPE html>
<html lang="vi">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Hệ thống Quản lý Nhân sự</title>
    <link rel="stylesheet" href="{{ asset('frontend/css/styles.css') }}">
    <link rel="stylesheet" href="{{ asset('frontend/css/contracts.css') }}">
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
            <div class="contract-container">

                <!-- Toolbar -->
                <div class="contract-toolbar">
                <button class="btn btn-add">+ Thêm hợp đồng</button>
                <input type="text" class="search-input" placeholder="Tìm kiếm hợp đồng...">
                <select class="filter-select">
                    <option>Tất cả loại hợp đồng</option>
                    <option>Thử việc</option>
                    <option>Chính thức</option>
                    <option>Thời vụ</option>
                </select>
                <select class="filter-select">
                    <option>Tất cả trạng thái</option>
                    <option>Còn hiệu lực</option>
                    <option>Sắp hết hạn</option>
                    <option>Hết hạn</option>
                </select>
                </div>

                <!-- Contract Table -->
                <table class="contract-table">
                <thead>
                    <tr>
                    <th>Số HĐ</th>
                    <th>Mã NV</th>
                    <th>Họ và Tên</th>
                    <th>Loại hợp đồng</th>
                    <th>Ngày bắt đầu</th>
                    <th>Ngày kết thúc</th>
                    <th>Trạng thái</th>
                    <th>Thao tác</th>
                    </tr>
                </thead>
                <tbody>
                    <tr>
                    <td>HD001</td>
                    <td>NV001</td>
                    <td>Nguyễn Văn A</td>
                    <td>Chính thức</td>
                    <td>01/01/2024</td>
                    <td>31/12/2025</td>
                    <td><span class="status active">Còn hiệu lực</span></td>
                    <td>
                        <button class="btn btn-view" onclick="openPopup('Nguyễn Văn A')">Xem</button>
                        <button class="btn btn-edit">Sửa</button>
                        <button class="btn btn-delete">Xóa</button>
                    </td>
                    </tr>
                    <tr>
                    <td>HD002</td>
                    <td>NV002</td>
                    <td>Trần Thị B</td>
                    <td>Thử việc</td>
                    <td>01/08/2025</td>
                    <td>31/10/2025</td>
                    <td><span class="status warning">Sắp hết hạn</span></td>
                    <td>
                        <button class="btn btn-view" onclick="openPopup('Trần Thị B')">Xem</button>
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
        <h2>Chi tiết hợp đồng</h2>
        <p><b>Nhân viên:</b> <span id="popup-name"></span></p>
        <p><b>Số HĐ:</b> HD001</p>
        <p><b>Ngày ký:</b> 01/01/2024</p>
        <p><b>Loại hợp đồng:</b> Chính thức</p>
        <p><b>Thời hạn:</b> 24 tháng</p>
        <p><b>Điều khoản chính:</b> Nhân viên cam kết tuân thủ nội quy công ty và thực hiện công việc theo mô tả.</p>
        <p><b>Trạng thái:</b> <span class="status active">Còn hiệu lực</span></p>
        </div>
    </div>
    <script src="{{ asset('frontend/js/contracts.js') }}"></script>

    <script src="{{ asset('frontend/js/script.js') }}"></script>
</body>
</html>
