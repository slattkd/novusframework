/*
provides messaging for mouseout, close, back, etc events
TODO: this may need to be included in functions to pass the modal_id variable
if $modal_id then custom basicModal component will be show
else simple alert/confirm messages will be displayed
*/

<script>
  // blocks back navigation
// function preventBack() {
//     window.history.forward();
// }
// setTimeout("preventBack()", 0);


// var for showing once
var shownExit = false;

function exitEvent() {
  console.log('exit');
  if (!shownExit) {
    // not immediate, less abrupt
    setTimeout(() => {
      // Alternatively we could use our own custom modal?
      <?php if($modal_id): ?>
        modalHandler('<?= $modal_id; ?>', true);
      <?php else: ?>
        window.alert('Are you sure you want to leave?');
      <?php endif; ?>
      shownExit = true;
    }, 2000);
  }
}

function backEvent() {
  console.log('back')
  <?php if($modal_id): ?>
    modalHandler('<?= $modal_id; ?>', true);
  <?php else: ?>
    // confirmation allows a decision in the browser
    var confirmationMessage = "Are you sure you want to leave this page?";
    (event || window.event).returnValue = confirmationMessage; // Browser support define return
    return confirmationMessage;
  <?php endif; ?>
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
  event.returnValue = '';
  // Chrome requires the event to be explicit
  backEvent();
});

window.addEventListener("popstate", function(event) {
  event.preventDefault();
  event.returnValue = '';
  // Chrome requires the event to be explicit
  backEvent();
});

</script>