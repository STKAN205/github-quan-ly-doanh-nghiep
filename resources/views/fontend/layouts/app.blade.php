<!DOCTYPE html>
<html lang="vi">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>@yield('title', 'Website của tôi')</title>
    <link rel="stylesheet" href="{{ asset('fontend/css/styles.css') }}">
</head>
<body>
    <div class="container">
        {{-- Header --}}
        @include('partials.header')

        <div class="sidebar">
            {{-- Sidebar --}}
            @include('partials.sidebar')
        </div>
        
        {{-- Nội dung chính --}}
        <main class="main">
            @yield('content')
        </main>

        {{-- Footer --}}
        @include('partials.footer')
    </div>

<script src="{{ asset('fontend/js/script.js') }}"></script>
</body>
</html>
