var allCTA = document.querySelectorAll('a.cta-link');

  allCTA.forEach((cta)=> {
      cta.addEventListener('click', (event)=> {
          cta.classList.add('processing')
          cta.querySelector('button').innerText = 'Processing...';
          disableCTAButtons();
      })
      
  })

  function disableCTAButtons() {
      allCTA.forEach((cta)=> {
          cta.style.pointerEvents = 'none';
          cta.querySelector('button').classList.add('disabled');
      })
  }