<!DOCTYPE html>
<html lang="vi">
<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <title>Quên tài khoản</title>
  <link rel="stylesheet" href="fontend/css/forgot.css" />
</head>
<body>
  <div class="container">
    <div class="forgot-box">
      <h2>Quên Tên Đăng Nhập / Mật Khẩu</h2>
      <p>Vui lòng nhập địa chỉ email bạn đã dùng để đăng ký. Chúng tôi sẽ gửi hướng dẫn khôi phục tài khoản.</p>
      <form>
        <div class="input-group">
          <span class="icon">📧</span>
          <input type="email" placeholder="Email của bạn" required />
        </div>
        <button type="submit">Gửi hướng dẫn</button>
        <a href= "{{ url('/login') }}" class="back-link">← Quay lại trang đăng nhập</a>
      </form>
    </div>
  </div>
  <script src="fontend/js/forgot.js"></script>
</body>
</html>