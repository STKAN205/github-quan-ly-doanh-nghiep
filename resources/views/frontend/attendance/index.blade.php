<!DOCTYPE html>
<html lang="vi">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Hệ thống Quản lý Nhân sự</title>
    <link rel="stylesheet" href="{{ asset('frontend/css/styles.css') }}">
    <link rel="stylesheet" href="{{ asset('frontend/css/attendance.css') }}">
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
            </div>

            {{-- Footer --}}
            @include('frontend.partials.footer')
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

    <script src="{{ asset('frontend/js/attendance.js') }}"></script>
    <script src="{{ asset('frontend/js/script.js') }}"></script>
</body>
</html>
