<!-- 
shows vidalytic videos with overlay option (may need update with 1:1 ratio videos)
php variables:
    $overlay (string) = include an image src attribute, play will require click
    $video_id (string) = replace the #myVid element id and the script id value 
    $drop_time (num) = ms when to fire the event to show a cta button
        - remove 'hidden' class on element with id of "container-buy" 
 -->


<div class="video-container">
    <?php if($overlay){
        echo '
        <button class="play-button"></button>
        <img id="video-overlay" class="click-to-play" onclick="clickOverlay()" src="' . $overlay . '" width="897" height="505">
        '
        ;
    }
    ?>

<div id="vidalytics_embed_<?php echo $video_id; ?>" style="width: 100%; position:relative;"></div>
    <script type="text/javascript">
    (function (v, i, d, a, l, y, t, c, s) {
        y='_'+d.toLowerCase();c=d+'L';if(!v[d]){v[d]={};}if(!v[c]){v[c]={};}if(!v[y]){v[y]={};}var vl='Loader',vli=v[y][vl],vsl=v[c][vl + 'Script'],vlf=v[c][vl + 'Loaded'],ve='Embed';
        if (!vsl){vsl=function(u,cb){
            if(t){cb();return;}s=i.createElement("script");s.type="text/javascript";s.async=1;s.src=u;
            if(s.readyState){s.onreadystatechange=function(){if(s.readyState==="loaded"||s.readyState=="complete"){s.onreadystatechange=null;vlf=1;cb();}};}else{s.onload=function(){vlf=1;cb();};}
            i.getElementsByTagName("head")[0].appendChild(s);
        };}
        vsl(l+'loader.min.js',function(){if(!vli){var vlc=v[c][vl];vli=new vlc();}vli.loadScript(l+'player.min.js',function(){var vec=v[d][ve];t=new vec();t.run(a);});});
    })(window, document, 'Vidalytics', 'vidalytics_embed_<?php echo $video_id; ?>', 'https://quick.vidalytics.com/embeds/KwmJQD4K/<?php echo $video_id; ?>/');
    </script>
</div>



<script type="text/javascript">
var EMBED_CODE_ID = 'vidalytics_embed_<?php echo $video_id; ?>'; // update this to match your Vidalytics Embed ID
var vidalyticsPlayerAPI = null;
var isPauseable = true;

function initializePlayerAPI() {
    var player = getPlayer();
    if (player._player) {
        vidalyticsPlayerAPI = player;
        onPlayerAPIAvailableCallback();
        return;
    }
    setTimeout(initializePlayerAPI, 100);
}

<?php if (!$overlay) { 
    echo('initializePlayerAPI();'); 
}?>

function popButton(){
    //Show the pop button
    var popButton = document.getElementById("container-buy");
    popButton.classList.remove("hidden");
    popButton.scrollIntoView({behavior: "smooth", block: "center"});
}

function getPlayer() {
    var embeds = (window._vidalytics || {}).embeds || {};
    if (embeds[EMBED_CODE_ID]) { 
    return embeds[EMBED_CODE_ID].player || {};
    }
    return {};
}

function onPlayerAPIAvailableCallback() {
    
    <?php if (!$overlay): ?>
        vidalyticsPlayerAPI.play();
    <?php endif; ?>

    vidalyticsPlayerAPI._player.addEventHandler('onTimeChanged', function () {
        if (vidalyticsPlayerAPI.getCurrentVideoTime() >= <?php echo $drop_time; ?>) {
            popButton();
        }
    });
    vidalyticsPlayerAPI._player.addEventHandler('onPaused', function () {
        if (!isPauseable) {
            vidalyticsPlayerAPI.play();
        }
    });
    
}

const overlay = document.getElementById('video-overlay');
const playButton = document.querySelector('.play-button');
// remove video overlay image on click
function clickOverlay() {
    if (overlay) {
        overlay.classList.add('invisible');
        playButton.classList.add('invisible');
        initializePlayerAPI();
    }
    const muteOverlay = document.querySelector('.bmpui-ui-vidalytics-unmute-box');
    if (muteOverlay) {
        muteOverlay.click();
    }
}

function pausePlayer(){
    isPauseable = true;
    vidalyticsPlayerAPI.pause();
}


window.addEventListener('click', (event)=> {
    let linkElements = document.querySelectorAll('a');
    let clickInLink = false;
    // is click on navigation
    linkElements.forEach((el)=> {
        if (el.contains(event.target)) {
            clickInLink = true;
        }
    })
	if( clickInLink ) {
        // clicking on link
	} else {
        // clicking on page
        clickOverlay();
	}
});

console.log('Video ID: <?php echo $video_id; ?>');
console.log('Drop_time: <?php echo $drop_time; ?>');

</script>