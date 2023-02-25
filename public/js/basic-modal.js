
  window.modalHandler = function(id, val) {
    let modal = document.getElementById(id);
    if (val && modal) {
      console.log('modal', id);
        fadeIn(modal, 'flex');
        document.body.style.overflow = 'hidden';
        document.body.style.height = '100vh';
    } else {
        document.body.style.overflow = 'auto';
        document.body.style.height = 'auto';
    }
  }

  function fadeOut(el) {
    el.style.opacity = 1;
    function fade() {
        if ((el.style.opacity -= 0.1) < 0) {
            el.style.display = "none";
        } else {
            requestAnimationFrame(fade);
        }
    }
    fade();
  }

  function fadeIn(el, display) {
    el.style.opacity = 0;
    el.style.display = display || "flex";
    function fade() {
        let val = parseFloat(el.style.opacity);
        if (!((val += 0.2) > 1)) {
            el.style.opacity = val;
            requestAnimationFrame(fade);
        }
    }
    fade();
    backgroundClick();
  }

  window.closeAll = function() {
    const modals = document.querySelectorAll('.modal-position');
    modals.forEach(modal => fadeOut(modal));
    document.body.style.overflow = 'auto';
  }


  function backgroundClick() {
    const bg = document.querySelector('.modal-position');
    bg.addEventListener('click', (e)=> {
      const isBG = e.target.classList.contains('modal-position');
      if (isBG) {
        closeAll();
      }
    })

  }

