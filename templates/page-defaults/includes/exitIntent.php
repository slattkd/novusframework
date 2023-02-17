<?php
 // declare modal variables (requires basic_modal.js)
     $modal_id = 'mouseModal';
     $modal_title = "WAIT! DO NOT LEAVE THIS PAGE!";
     $modal_body = '
     <div class="modalsubheader text-center my-2">IT COULD CAUSE ERRORS IN YOUR ORDER</div>
     <div class="text-sm text-center my-2">Do not hit the back button or close your browser.
     <br>Click <span class="font-bold">"FINISH CUSTOMIZING MY ORDER"</span> below and <span style="text-decoration: underline;font-weight:bold;">make your decision on this page</span>.</div>
     ';
     $modal_footer = '<button id="modalbutton" type="button" class="modalbutton w-full bg-blue-600 p-3 rounded text-white">FINISH CUSTOMIZING MY ORDER</button>';
     modal("includes/basicModal", $modal_id, $modal_title, $modal_body, $modal_footer);
 ?>

<script>
// var for showing once
var shownExit = false;

document.addEventListener("mouseout", event => {
  if ((event.toElement === null || event.toElement === undefined) && event.relatedTarget === null) {
    exitEvent();
    shownExit = true;
  }
  console.log('mouseout', event);
});

window.addEventListener('hashchange', (event) => {
  event.preventDefault();
  backEvent();
  console.log('has change', event);
})

window.addEventListener('unload', (event) => {
  event.preventDefault();
  backEvent();
  console.log('unload', event);
})

window.addEventListener('popstate', (event) => {
  event.preventDefault();
  backEvent();
  console.log('popstate', event);
});


function exitEvent() {
  console.log('exit');
  if (!shownExit) {
    // not immediate, less abrupt
    setTimeout(() => {
      // modalHandler('mouseModal', true);
      window.alert('Are you sure you want to leave?');
    }, 2000);
  }
}

function backEvent() {
  console.log('back')
  // confirmation allows a decision in the browser
  if (confirm("Press a button!") == true) {
    console.log('accepted');
  } else {
    console.log('rejected');
  }
}
</script>