const formLogin = document.querySelector('.login-form form');
loginBtn = formLogin.querySelector('.button_div button');
errorMsg = formLogin.querySelector('.error-message');

formLogin.onsubmit = (e) => {
    e.preventDefault();
};

loginBtn.onclick = () => {
    let xhr = new XMLHttpRequest();
    xhr.open('POST', 'includes/login.inc.php', true);
    xhr.onload = () => {
        if (xhr.readyState === XMLHttpRequest.DONE) {
            if (xhr.status === 200) {
                let data = xhr.response;
                if (data === 'success') {
                    window.location.href = 'index.php';
                } else {
                    errorMsg.textContent = data;
                    errorMsg.style.display = 'block';
                    setTimeout(function () {
                        errorMsg.style.display = 'none';
                    }, 5000);
                }
            }
        }
    }
    let formData = new FormData(formLogin);
    xhr.send(formData);
}