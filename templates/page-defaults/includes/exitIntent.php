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

function exitEvent() {
  console.log('exit');
  if (!shownExit) {
    // not immediate, less abrupt
    setTimeout(() => {
      // Alternatively we could use our own custom modal?
      // modalHandler('mouseModal', true);
      window.alert('Are you sure you want to leave?');
      shownExit = true;
    }, 2000);
  }
}

function backEvent() {
  console.log('back')
  event.preventDefault();
  event.returnValue = '';
  // confirmation allows a decision in the browser
  var confirmationMessage = "Are you sure you want to leave this page?";
  (event || window.event).returnValue = confirmationMessage; // Browser support define return
  return confirmationMessage;
}


let isMouseOutOfWindow = true;
// Add event listener for mouseleave
document.addEventListener("mouseleave", function(event) {
  if (event.clientY <= 0) {
    isMouseOutOfWindow = true;
    exitEvent();
  }
});

// Add event listener for mouseout
document.addEventListener("mouseout", function(event) {
  if (event.relatedTarget === null) {
    isMouseOutOfWindow = true;
    exitEvent();
  }
});

window.addEventListener("unload", function(event) {
  event.preventDefault();
  // Chrome requires the event to be explicitly acknowledged
  backEvent();
});

window.addEventListener("popstate", function(event) {
  event.preventDefault();
  // Chrome requires the event to be explicitly acknowledged
  backEvent();
});

</script>