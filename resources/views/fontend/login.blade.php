<!DOCTYPE html>
<html lang="vi">
<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <title>Quản trị viên</title>
  <link rel="stylesheet" href="/fontend/css/login.css" />
</head>
<body>
  <div class="container">
    <div class="login-box">
      <div class="graphic-side">
        <div class="graphic">
          <img src="https://cdn-icons-png.flaticon.com/512/847/847969.png" alt="Laptop Icon" />
          <div class="shapes">
            <span class="circle"></span>
            <span class="square"></span>
            <span class="triangle"></span>
          </div>
        </div>
      </div>
      <div class="form-side">
        <h2>Admin Login</h2>
        <form>
          <div class="input-group">
            <span class="icon">📧</span>
            <input type="email" placeholder="Email" required />
          </div>
          <div class="input-group">
            <span class="icon">🔒</span>
            <input type="password" placeholder="Password" required />
          </div>
          <button type="submit">LOGIN</button>
          <a href="{{ url('/forgot') }}" class="forgot">Forgot Username / Password?</a>
        </form>
        <a href="#" class="create-account">Create your Account →</a>
      </div>
    </div>
  </div>

  <script src="/fontend/js/login.js"></script>
</body>
</html>