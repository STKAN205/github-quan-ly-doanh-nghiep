<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Login Demo</title>
  <link rel="stylesheet" href="{{ asset('frontend/css/login.css') }}">
  <style>
    .error-message {
      color: red;
      text-align: center;
      margin-bottom: 15px;
      font-weight: bold;
    }
  </style>
</head>
<body>

<div class="container">
  <div class="login-box">
    <form method="POST" action="{{ route('login.post') }}">
      @csrf
      <h2>Login</h2>

      {{-- Thông báo lỗi --}}
      @if(session('error'))
        <div class="error-message">
          {{ session('error') }}
        </div>
      @endif

      <div class="input-box">
        <input type="text" name="email" id="email" required />
        <label for="email">Email</label>
      </div>
      <div class="input-box">
        <input type="password" name="password" id="password" required autocomplete="off" />
        <label for="password">Password</label>
      </div>
      <div class="forgot-pass">
        <a href="#">Forgot your password?</a>
      </div>
      <div class="input-box">
        <button type="submit" class="btn">Login</button>
      </div>
      <div class="signup-link">
        <a href="#">Signup</a>
      </div>
    </form>
  </div>
</div>

</body>
</html>



<!--
<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Animated Login Form Using PHP & CSS</title>
  <link rel="icon" href="frontend/login.png" type="image/x-icon">
  <link rel="stylesheet" href="frontend/css/login.css">
</head>
<body>

<div class="container">
  <div class="login-box">
    <form method="POST" action="login.php">
      <h2>Login</h2>
      <div class="input-box">
        <input type="text" name="email" id="email" required />
        <label for="email">Email</label>
      </div>
      <div class="input-box">
        <input type="password" name="password" id="password" required autocomplete="off" />
        <label for="password">Password</label>
      </div>
      <div class="forgot-pass">
        <a href="#">Forgot your password?</a>
      </div>
      <div class="input-box">
        <button type="submit" class="btn">Login</button>
      </div>
      <div class="signup-link">
        <a href="#" class="signup-link">Signup</a>
      </div>
    </form>
  </div>
</div>
</body>
</html>

