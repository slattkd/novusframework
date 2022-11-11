
  window.modalHandler = function(id, val) {
    let modal = document.getElementById(id);
    if (val) {
        fadeIn(modal, 'flex');
        document.body.style.overflow = 'hidden';
        const background = document.querySelector('.modal-position');
        background.addEventListener('click', closeAll);
    } else {
        fadeOut(modal);
        document.body.style.overflow = 'auto';
    }
  }

  function fadeOut(el) {
    el.style.opacity = 1;
    (function fade() {
        if ((el.style.opacity -= 0.1) < 0) {
            el.style.display = "none";
        } else {
            requestAnimationFrame(fade);
        }
    })();
  }

  function fadeIn(el, display) {
    el.style.opacity = 0;
    el.style.display = display || "flex";
    (function fade() {
        let val = parseFloat(el.style.opacity);
        if (!((val += 0.2) > 1)) {
            el.style.opacity = val;
            requestAnimationFrame(fade);
        }
    })();
  }

  window.closeAll = function() {
    const modals = document.querySelectorAll('.modal-position');
    modals.forEach(modal => fadeOut(modal));
    document.body.style.overflow = 'auto';
  }

