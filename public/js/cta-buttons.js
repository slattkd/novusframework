// Requires a button structure of:
// <a class="cta-link"><button class="cta-button">Button Text</button></a>

setTimeout(function() {
    var allCTA = document.querySelectorAll('a.cta-link');
    allCTA.forEach((cta)=> {
        cta.addEventListener('click', (event)=> {
            cta.classList.add('processing')
            cta.querySelector('button').innerText = 'Processing...';
            disableCTAButtons(allCTA);
        })
        
    })
}, 200);

function disableCTAButtons(elements) {
    elements.forEach((cta)=> {
        cta.style.pointerEvents = 'none';
        cta.querySelector('button').classList.add('disabled');
    })
}

function scrollToDiv(element) {
    var elem = document.getElementById(element);
    elem.scrollIntoView();
}
