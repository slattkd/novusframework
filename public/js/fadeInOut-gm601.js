

fadeInDelay = 0;
fadeInDiv = '#container-buy';
fadeOutDiv = '#main-hdl, #sub-hdl';


setTimeout(function(){
    $(fadeInDiv).fadeIn(100),
    $(fadeOutDiv).fadeOut(100),
    $(window).load(function() {
        $('html, body').animate({
            scrollTop: $("#container-buy").offset().top
        },1000)
    }),
    doStart()
},fadeInDelay);