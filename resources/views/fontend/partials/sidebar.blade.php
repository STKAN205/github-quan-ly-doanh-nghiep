<!-- Sidebar -->
<aside class="sidebar">
        <div class="logo">
            <a href="/trang-chu">
                <img src="{{ asset('fontend/images/logoHR.png') }}" alt="Logo công ty">
            </a>
        </div>
    <nav class="menu">
            <ul>
                <li><a href="/trang-chu" class="{{ request()->is('trang-chu') ? 'active' : '' }}">🏠 Trang chủ</a></li>
                <li><a href="/employee" class="{{ request()->is('employee') ? 'active' : '' }}">🧑‍💼 Quản lý nhân viên</a></li>
                <li><a href="/departments" class="{{ request()->is('departments') ? 'active' : '' }}">🏢 Quản lý phòng ban & chức vụ</a></li>
                <li><a href="/attendance" class="{{ request()->is('attendance') ? 'active' : '' }}">⏱️ Quản lý chấm công</a></li>
                <li><a href="/salary" class="{{ request()->is('salary') ? 'active' : '' }}">💰 Quản lý lương & thu nhập</a></li>
                <li><a href="/contracts" class="{{ request()->is('contracts') ? 'active' : '' }}">📄 Quản lý hợp đồng lao động</a></li>
                <li><a href="/report" class="{{ request()->is('report') ? 'active' : '' }}">📊 Quản lý báo cáo</a></li>
                <li><a href="/notifications" class="{{ request()->is('notifications') ? 'active' : '' }}">🔔 Quản lý thông báo</a></li>
                <li><a href="/support" class="{{ request()->is('support') ? 'active' : '' }}">🆘 Hỗ trợ</a></li>
            </ul>
    </nav>
</aside>