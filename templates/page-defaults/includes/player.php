<div class="video-container">
    <?php if($overlay){
        echo('<img id="video-overlay" class="click-to-play" onclick="clickOverlay()" src="' . $overlay . '" width="897" height="505">');
    }
    ?>

<div id="vidalytics_embed_<?php echo $videoID; ?>" style="width: 100%; position:relative;"></div>
    <script type="text/javascript">
    (function (v, i, d, a, l, y, t, c, s) {
        y='_'+d.toLowerCase();c=d+'L';if(!v[d]){v[d]={};}if(!v[c]){v[c]={};}if(!v[y]){v[y]={};}var vl='Loader',vli=v[y][vl],vsl=v[c][vl + 'Script'],vlf=v[c][vl + 'Loaded'],ve='Embed';
        if (!vsl){vsl=function(u,cb){
            if(t){cb();return;}s=i.createElement("script");s.type="text/javascript";s.async=1;s.src=u;
            if(s.readyState){s.onreadystatechange=function(){if(s.readyState==="loaded"||s.readyState=="complete"){s.onreadystatechange=null;vlf=1;cb();}};}else{s.onload=function(){vlf=1;cb();};}
            i.getElementsByTagName("head")[0].appendChild(s);
        };}
        vsl(l+'loader.min.js',function(){if(!vli){var vlc=v[c][vl];vli=new vlc();}vli.loadScript(l+'player.min.js',function(){var vec=v[d][ve];t=new vec();t.run(a);});});
    })(window, document, 'Vidalytics', 'vidalytics_embed_<?php echo $videoID; ?>', 'https://quick.vidalytics.com/embeds/KwmJQD4K/<?php echo $videoID; ?>/');
    </script>
</div>



<script type="text/javascript">
var EMBED_CODE_ID = 'vidalytics_embed_<?php echo $videoID; ?>'; // update this to match your Vidalytics Embed ID
var vidalyticsPlayerAPI = null;

function initializePlayerAPI() {
    var player = getPlayer();
    if (player._player) {
        vidalyticsPlayerAPI = player;
        onPlayerAPIAvailableCallback();
        vidalyticsPlayerAPI.play();
        return;
    }
    setTimeout(initializePlayerAPI, 20);
}

function popButton(){
    //Show the pop button
    var popButton = document.getElementById("container-buy");
    popButton.classList.remove("hidden");
}




function getPlayer() {
    var embeds = (_vidalytics || {}).embeds || {};
    if (embeds[EMBED_CODE_ID]) {
        return embeds[EMBED_CODE_ID].player || {};
    }
    return {};
}

function onPlayerAPIAvailableCallback() {
    vidalyticsPlayerAPI._player.addEventHandler('onTimeChanged', function () {
        if (vidalyticsPlayerAPI.getCurrentVideoTime() >= <?php echo $dropTime; ?>) {
            popButton();
            var containerbuy = document.getElementById("container-buy");
            containerbuy.scrollIntoView({behavior: "smooth"});
        }
    });
    vidalyticsPlayerAPI._player.addEventHandler('onPaused', function () {
        if (!isPauseable) {
            vidalyticsPlayerAPI.play();
        }
    });
}

const overlay = document.getElementById('video-overlay');

// remove video overlay image on click
function clickOverlay() {
    if (overlay) {
        overlay.classList.add('invisible');
        initializePlayerAPI();
    }
}

<?php if (!$overlay) {
    echo('initializePlayerAPI();');
}
?>

function pausePlayer(){
    console.log('pause');
    var isPauseable = 1;
    vidalyticsPlayerAPI.pause();
}

window.addEventListener('click', (e)=> {
    const modalBackground = document.querySelector('.modal-position.modal-bg');
    window.closeAll();
        clickOverlay();
}, {once : true});

</script>