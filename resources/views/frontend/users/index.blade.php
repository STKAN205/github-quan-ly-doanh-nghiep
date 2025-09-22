<!-- Header -->
<header class="header" style="position: relative;">
    <div class="search">
        <input type="text" placeholder="Tìm kiếm...">
    </div>
    <div class="user-actions">
        <span class="notif">🔔</span>
        <!-- Nút Admin -->
        <a href="javascript:void(0)" class="user" id="userMenuToggle">👤 Admin</a>

        <!-- Popup Dropdown -->
        <div class="user-menu" id="userMenu">
            <div class="user-info">
                <img src="frontend\images\avatarUser.png" alt="Avatar">
                <div>
                    <strong>Nguyễn Văn A</strong><br>
                    <small>admin@example.com</small>
                </div>
            </div>
            <hr>
            <ul>
                <li><a href="#">📋 Trang cá nhân</a></li>
                <li><a href="#">⚙️ Cài đặt</a></li>
                <li><a href="#">🔒 Đăng xuất</a></li>
            </ul>
        </div>
    </div>
</header>

<!-- CSS -->
<style>
.user-actions {
    position: relative;
    display: inline-block;
}

.user {
    cursor: pointer;
    padding: 5px 10px;
    font-weight: bold;
}

.user-menu {
    display: none;
    position: absolute;
    top: 35px;
    right: 0;
    background: #fff;
    border: 1px solid #ddd;
    border-radius: 8px;
    box-shadow: 0 4px 8px rgba(0,0,0,0.1);
    width: 220px;
    z-index: 1000;
}

.user-menu .user-info {
    display: flex;
    align-items: center;
    padding: 10px;
}

.user-menu .user-info img {
    border-radius: 50%;
    margin-right: 10px;
}

.user-menu ul {
    list-style: none;
    margin: 0;
    padding: 0;
}

.user-menu ul li a {
    display: block;
    padding: 10px;
    text-decoration: none;
    color: #333;
}

.user-menu ul li a:hover {
    background: #f2f2f2;
}
</style>

<!-- JS -->
<script>
document.addEventListener("DOMContentLoaded", function () {
    const toggleBtn = document.getElementById("userMenuToggle");
    const menu = document.getElementById("userMenu");

    toggleBtn.addEventListener("click", function (e) {
        e.preventDefault();
        menu.style.display = menu.style.display === "block" ? "none" : "block";
    });

    // Click ra ngoài thì đóng popup
    document.addEventListener("click", function (e) {
        if (!toggleBtn.contains(e.target) && !menu.contains(e.target)) {
            menu.style.display = "none";
        }
    });
});
</script>
