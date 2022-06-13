const form = document.querySelector('.update-post form');
submitBtn = form.querySelector('.updateBtn button');

form.onsubmit = (e) => {
    e.preventDefault();
}
submitBtn.onclick = () => {
   let xhr = new XMLHttpRequest();
   xhr.open('POST', './includes/updatepost.inc.php', true);
   xhr.onload = () => {
      if (xhr.readyState === XMLHttpRequest.DONE){
          if (xhr.status === 200) {
              let data = xhr.response;
              if (data === 'success') {
                  window.location.href = './updatepost.php';
              } else {
                  alert(data);
              }
          }
      }
   }
    const formData = new FormData(form);
   xhr.send(formData);
};