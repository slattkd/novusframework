<?php

?>

<div class="input w-full mb-0 ">
  <div class="w-full z-10 invisible">
    <label for="email" class="text-sm text-gray-600 hidden md:block rounded">Email</label>
  </div>
  <input id="email" name="email" data-pristine-type="email"
    data-valid="false"
    data-pristine-email-message="Not a valid email"
    placeholder="Email" 
    class="flex p-2 rounded border border-gray-300" required>
</div>


<script>

  const verifyURL = 'https://api.listclean.xyz/v1/verify/email/';
  const emailInput = document.getElementById('email');

  function isEmailValid(email) { return /^\S+@\S+\.\S+$/.test(email); }

  document.addEventListener('DOMContentLoaded', function() {
    emailInput.addEventListener('blur', ()=> {
      if (isEmailValid(emailInput.value)) {
        sendData(emailInput.value);
      }
    })

  });


  function sendData(email) {
      var xhr = new XMLHttpRequest();
      xhr.open('POST', '/includes/emailVerifyAPI.php', true);
      xhr.setRequestHeader('Content-Type', 'application/x-www-form-urlencoded');
      xhr.onreadystatechange = function() {
          if (xhr.readyState === XMLHttpRequest.DONE) {
              if (xhr.status === 200) {
                  var responseString = JSON.parse(xhr.responseText);
                  // status response values Valid, Invalid,Catch-all, or Unknown.
                  let status = responseString.Status;
                  if (status == 'Valid' || status == 'Catch-all') {
                    emailInput.setAttribute("data-valid", true);
                  } else {
                    emailInput.setAttribute("data-valid", false);
                  }
                  console.log(status);
              } else {
                  var errString = JSON.parse(xhr.status);
                  emailInput.setAttribute("data-valid", false);
                  console.error('Error:', errString);
              }
          }
      };
      xhr.send('email=' + encodeURIComponent(email));
  }



</script>