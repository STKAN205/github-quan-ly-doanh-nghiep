// Hiệu ứng khi nhập vào ô input
const inputs = document.querySelectorAll('.input-group input');

inputs.forEach(input => {
  input.addEventListener('focus', () => {
    input.parentElement.style.borderBottomColor = '#4a90e2';
    input.parentElement.style.transition = 'border-color 0.3s ease';
  });

  input.addEventListener('blur', () => {
    input.parentElement.style.borderBottomColor = '#ccc';
  });
});

// Hiệu ứng khi click nút LOGIN
const loginButton = document.querySelector('button');

loginButton.addEventListener('click', (e) => {
  e.preventDefault(); // Ngăn form gửi đi để hiển thị hiệu ứng

  loginButton.style.transform = 'scale(0.95)';
  loginButton.style.backgroundColor = '#388e3c';

  setTimeout(() => {
    loginButton.style.transform = 'scale(1)';
    loginButton.style.backgroundColor = '#4caf50';
    alert('Đăng nhập thành công (giả lập)');
  }, 200);
});