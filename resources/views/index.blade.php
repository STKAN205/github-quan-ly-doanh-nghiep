<!DOCTYPE html>
<html lang="vi">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Hệ thống Quản lý Nhân sự</title>
    <link rel="stylesheet" href="{{ asset('frontend/css/styles.css') }}">
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
            <main class="main">
                <h1>Dashboard</h1>
                <div class="cards">
                    <div class="card">Tổng số nhân viên: 120</div>
                    <div class="card">Phòng ban: 5</div>
                    <div class="card">Hợp đồng sắp hết hạn: 3</div>
                </div>
            </main>

            {{-- Footer --}}
            @include('frontend.partials.footer')
        </div>
    </div>

    <script src="{{ asset('frontend/js/script.js') }}"></script>
</body>
</html>
