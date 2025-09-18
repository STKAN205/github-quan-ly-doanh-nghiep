const form = document.querySelector('form');
const button = document.querySelector('button');

form.addEventListener('submit', (e) => {
  e.preventDefault();

  button.textContent = 'Đang gửi...';
  button.disabled = true;

  setTimeout(() => {
    alert('Hướng dẫn khôi phục đã được gửi đến email của bạn!');
    button.textContent = 'Gửi hướng dẫn';
    button.disabled = false;
    form.reset();
  }, 1500);
});