document.addEventListener('DOMContentLoaded', function() {
    const passwordInput = document.querySelector('input[name="password"]');
    const eyeIcon = document.querySelector('.bx-low-vision'); 
    const eyeSlashIcon = document.querySelector('.bx-show'); 
    eyeIcon.addEventListener('click', function() {
      if (passwordInput.type === 'password') {
        passwordInput.type = 'text';
        eyeIcon.classList.replace('bx-low-vision', 'bx-show');
      } else {
        passwordInput.type = 'password';
        eyeIcon.classList.replace('bx-show', 'bx-low-vision');
      }
    });
  });