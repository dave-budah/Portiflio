const passwordField = document.querySelector('.form .field input[type="password"]');
toggleBtn = document.querySelector('.form .field span');


toggleBtn.onclick = () => {
    if (passwordField.type === 'password') {
        passwordField.type = 'text';
        toggleBtn.innerHTML = '<i class="fas fa-eye-slash"></i>';
    } else {
        passwordField.type = 'password';
        toggleBtn.innerHTML = '<i class="fas fa-eye"></i>';
    }
}
const pwdField = document.querySelector('.form .field2 input[type="password"]');
toggleBtns = document.querySelector('.form .field2 span');
toggleBtns.onclick = () => {
    if (pwdField.type === 'password') {
        pwdField.type = 'text';
        toggleBtns.innerHTML = '<i class="fas fa-eye-slash"></i>';
    } else {
        pwdField.type = 'password';
        toggleBtns.innerHTML = '<i class="fas fa-eye"></i>';
    }
}