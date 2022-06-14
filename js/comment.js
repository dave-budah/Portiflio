const form = document.querySelector('.comment_form form');
submitBtn = form.querySelector('.submitBtn button');

form.onsubmit = (e) => {
    e.preventDefault();
}

submitBtn.onclick = () => {
    let xhr = new XMLHttpRequest();
    xhr.open('POST', '../comment.php', true);
    xhr.onload = () => {
        if (xhr.readyState === XMLHttpRequest.DONE){
            if (xhr.status === 200) {
                let data = xhr.response;
                if (data === 'success') {
                    form.reset();
                } else {
                    alert(data);
                }
            }
        }
    }
    const formData = new FormData(form);
    xhr.send(formData);
};