const regForm = document.querySelector('.reg-form form');
registerBtn = regForm.querySelector('.button_div button');
errorText = regForm.querySelector('.error-message');

regForm.onsubmit = (e) => {
    e.preventDefault();
};

registerBtn.onclick = () => {
    let xhr = new XMLHttpRequest();
    xhr.open('POST', 'includes/register.inc.php', true);
    xhr.onload = () => {
        if (xhr.readyState === XMLHttpRequest.DONE) {
            if (xhr.status === 200) {
                let data = xhr.response;
                if (data === 'success') {
                    window.location.href = 'index.php';
                } else {
                    errorText.textContent = data;
                    errorText.style.display = 'block';
                    setTimeout(function () {
                        errorText.style.display = 'none';
                    }, 5000);
                }
            }
        }
    }
    let formData = new FormData(regForm);
    xhr.send(formData);
}