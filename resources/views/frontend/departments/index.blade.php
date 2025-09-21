<!DOCTYPE html>
<html lang="vi">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Hệ thống Quản lý Nhân sự</title>
    <link rel="stylesheet" href="{{ asset('frontend/css/styles.css') }}">
    <link rel="stylesheet" href="{{ asset('frontend/css/departments.css') }}">
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
            <main class="main-department">
                <!-- Toolbar -->
                <div class="toolbar">
                    <button class="btn btn-add">+ Thêm phòng ban</button>
                    <button class="btn btn-add">+ Thêm chức vụ</button>
                    <input type="text" class="search-input" placeholder="Tìm kiếm...">
                </div>

                <!-- Tabs -->
                <div class="tabs">
                    <button class="tab active" onclick="showTab('departments')">Phòng ban</button>
                    <button class="tab" onclick="showTab('positions')">Chức vụ</button>
                </div>

                <!-- Bảng phòng ban -->
                <div id="departments" class="tab-content active">
                    <table class="department-table">
                        <thead>
                            <tr>
                                <th>Mã PB</th>
                                <th>Tên phòng ban</th>
                                <th>Trưởng phòng</th>
                                <th>Số nhân viên</th>
                                <th>Mô tả</th>
                                <th>Trạng thái</th>
                                <th>Thao tác</th>
                            </tr>
                        </thead>
                        <tbody>
                            <tr>
                                <td>D01</td>
                                <td>Kế toán</td>
                                <td>Nguyễn Văn A</td>
                                <td>5</td>
                                <td>Quản lý tài chính công ty</td>
                                <td>Hoạt động</td>
                                <td>
                                    <button class="btn btn-detail" onclick="openPopup('pb1')">Xem</button>
                                    <button class="btn btn-edit">Sửa</button>
                                    <button class="btn btn-delete">Xóa</button>
                                </td>
                            </tr>
                            <tr>
                                <td>D02</td>
                                <td>Nhân sự</td>
                                <td>Trần Thị B</td>
                                <td>8</td>
                                <td>Quản lý nhân viên</td>
                                <td>Hoạt động</td>
                                <td>
                                    <button class="btn btn-detail" onclick="openPopup('pb2')">Xem</button>
                                    <button class="btn btn-edit">Sửa</button>
                                    <button class="btn btn-delete">Xóa</button>
                                </td>
                            </tr>
                        </tbody>
                    </table>
                </div>

                <!-- Bảng chức vụ -->
                <div id="positions" class="tab-content">
                    <table class="department-table">
                        <thead>
                            <tr>
                                <th>Mã CV</th>
                                <th>Tên chức vụ</th>
                                <th>Phòng ban</th>
                                <th>Lương cơ bản</th>
                                <th>Mô tả</th>
                                <th>Trạng thái</th>
                                <th>Thao tác</th>
                            </tr>
                        </thead>
                        <tbody>
                            <tr>
                                <td>CV01</td>
                                <td>Trưởng phòng</td>
                                <td>Kế toán</td>
                                <td>15,000,000</td>
                                <td>Quản lý phòng kế toán</td>
                                <td>Hoạt động</td>
                                <td>
                                    <button class="btn btn-detail" onclick="openPopup('cv1')">Xem</button>
                                    <button class="btn btn-edit">Sửa</button>
                                    <button class="btn btn-delete">Xóa</button>
                                </td>
                            </tr>
                            <tr>
                                <td>CV02</td>
                                <td>Nhân viên</td>
                                <td>Nhân sự</td>
                                <td>8,000,000</td>
                                <td>Hỗ trợ tuyển dụng</td>
                                <td>Hoạt động</td>
                                <td>
                                    <button class="btn btn-detail" onclick="openPopup('cv2')">Xem</button>
                                    <button class="btn btn-edit">Sửa</button>
                                    <button class="btn btn-delete">Xóa</button>
                                </td>
                            </tr>
                        </tbody>
                    </table>
                </div>
            </main>

            {{-- Footer --}}
            @include('frontend.partials.footer')
        </div>
    </div>

    <!-- Popup -->
    <div id="popup" class="popup">
        <div class="popup-content">
            <span class="close" onclick="closePopup()">&times;</span>
            <div id="popup-body">
                <!-- Thông tin sẽ được JS load -->
            </div>
        </div>
    </div>

    <script src="{{ asset('frontend/js/department.js') }}"></script>
    <script src="{{ asset('frontend/js/script.js') }}"></script>

</body>
</html>
