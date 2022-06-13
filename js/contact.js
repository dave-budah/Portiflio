const form = document.querySelector('form');
const statusTxt = document.querySelector('.button-area p');

form.onsubmit = function(e) {
  e.preventDefault();
  statusTxt.style.display = 'block';


  const formData = new FormData(form);
  const xhr = new XMLHttpRequest();


  xhr.open('POST', 'includes/message.php', true);
  xhr.setRequestHeader('Accept', 'application/json');
   xhr.onload = () => {
       if (xhr.readyState === 4 && xhr.status === 200) {
           let response = xhr.response;
           if(response.indexOf('Please fill in all fields') != -1 ||
               response.indexOf('Please enter a valid email') != -1 ||
               response.indexOf('There was a problem sending your message.') != -1) {
               statusTxt.style.color = '#f44336';
               statusTxt.style.fontSize = '1.2rem';
           } else {
               form.reset();
               statusTxt.style.color = '#4caf50';
                 setTimeout(function () {
                   statusTxt.style.display = 'none';
                 }, 3000);
           }
           statusTxt.innerText = response;
       }
   }

  xhr.send(formData);
};

