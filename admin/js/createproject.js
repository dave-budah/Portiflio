const form = document.querySelector('.create-project form');
submitBtn = form.querySelector('.projectBtn button');

form.onsubmit = (e) => {
    e.preventDefault();
}
submitBtn.onclick = () => {
   let xhr = new XMLHttpRequest();
   xhr.open('POST', './includes/createproject.inc.php', true);
   xhr.onload = () => {
      if (xhr.readyState === XMLHttpRequest.DONE){
          if (xhr.status === 200) {
              let data = xhr.response;
              if (data === 'success') {
                  window.location.href = './createproject.php';
              } else {
                  alert(data);
              }
          }
      }
   }
    const formData = new FormData(form);
   xhr.send(formData);
};