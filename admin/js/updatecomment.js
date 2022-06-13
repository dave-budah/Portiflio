const commentForm = document.querySelector('.updatecomment form');
updatecommentBtn = commentForm.querySelector('.updatecommentBtn button');

commentForm.onsubmit = (e) => {
    e.preventDefault();
}
updatecommentBtn.onclick = () => {
   let xhr = new XMLHttpRequest();
   xhr.open('POST', './includes/updatecomment.inc.php', true);
   xhr.onload = () => {
      if (xhr.readyState === XMLHttpRequest.DONE){
          if (xhr.status === 200) {
              let data = xhr.response;
              if (data === 'success') {
                  window.location.href = 'comments.php';
              } else {
                    alert(data);
              }
          }
      }
   }
    const formData = new FormData(commentForm);
   xhr.send(formData);
};