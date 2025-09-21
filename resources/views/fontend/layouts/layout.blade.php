<!DOCTYPE html>
<html lang="vi">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Hệ thống Quản lý Nhân sự</title>
    <link rel="stylesheet" href="{{ asset('fontend/css/styles.css') }}">
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
            <main class="main">
                <h2>Demo layout.blade.php</h2>
                <p>Nếu bạn thấy được header, sidebar, footer thì tái sử dụng thành công 🎉</p>
            </main>

            {{-- Footer --}}
            @include('fontend.partials.footer')
        </div>
    </div>

    <script src="{{ asset('fontend/js/script.js') }}"></script>
</body>
</html>
