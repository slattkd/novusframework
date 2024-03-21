<?php

$autoplay = !$overlay;

$file_type = 'video/mp4';
if (isset($video_url) && str_contains($video_url, 'm3u8')) {
    $file_type = 'application/x-mpegURL';
}

?>


<link href="https://cdnjs.cloudflare.com/ajax/libs/video.js/7.10.2/video-js.min.css" rel="stylesheet" />

<style>
#video-wrapper{
    display:flex;
    position:relative;
    justify-content:center;
    max-height:720px;
    max-width:720px;
    font-family: sans-serif;
    aspect-ratio: 16/9;
}
<?php if($square): ?>
    #video-wrapper {
        aspect-ratio: 1/1;
    }
<?php endif; ?>
video-js{
    max-height:100vw;
    max-width:100vh;
}
.video-element-dimensions.vjs-fluid:not(.vjs-audio-only-mode){
    padding-top:0
}
#video-element{
    width:100%;
    height:100%;
    max-width:100vw;
    max-height:100vh;
    margin:0 auto;
    z-index:1;
    position:relative;
    overflow:hidden
}
.video-js .vjs-control-bar{
    display:-webkit-box;
    display:-webkit-flex;
    display:-ms-flexbox;
    display:flex
}
.video-js{
    font-size:10px;
    color:#fff;
    border:1px solid gray
}
.vjs-default-skin .vjs-big-play-button{
    font-size:3em;
    line-height:1.5em;
    height:2em;
    width:2em;
    border:.06666em solid #fff;
    border-radius:5em;
    left:calc(50% - 1rem);
    top:calc(50% - .25em);
    z-index:10;
    position:absolute
}
.vjs-default-skin .vjs-big-play-button .vjs-control-text{
    background-image:url("data:image/svg+xml,%3Csvg xmlns='http://www.w3.org/2000/svg' viewBox='0 0 448 512' width='100' height='100' title='play'%3E%3Cpath fill='%23fff' d='M424.4 214.7L72.4 6.6C43.8-10.3 0 6.1 0 47.9V464c0 37.5 40.7 60.1 72.4 41.3l352-208c31.4-18.5 31.5-64.1 0-82.6z' /%3E%3C/svg%3E");
    width:30px;
    height:30px;
    background-size:contain;
    background-repeat:no-repeat;
    background-position:center;
    margin:-15px -12px;
    clip:unset;
    text-indent:100%;
    white-space:nowrap;
    overflow:hidden
}
.video-js .vjs-big-play-button,.video-js .vjs-control-bar,.video-js .vjs-menu-button .vjs-menu-content{
    background-color:#2b333f;
    background-color:rgba(43,51,63,.7);
}
.vjs-play-control.vjs-control{
    content:""
}

<?php if($controls): ?>
.vjs-has-started.vjs-user-inactive.vjs-playing .vjs-control-bar {
    visibility: visible;
    opacity: 1;
    transition: visibility 1s, opacity 1s;
    user-select:auto;
}
<?php endif; ?>

.video-js .vjs-big-play-button .vjs-icon-placeholder:before {
    content: "";
}

.video-js .vjs-control-bar{
    opacity:1;
    user-select:auto
}   
.vjs-play-control.vjs-control:not(.vjs-playing) {
    content: "\f101"
}

.vjs-playback-rate.vjs-menu-button {
    display: none;
}
.video-js .vjs-poster{
    background-size:cover;
    max-height:100%;
    max-width:100%
}
video-js .vjs-picture-in-picture-control{
    display:none
}
.video-js .vjs-slider{
    background-color:#73859f;
    background-color:rgba(115,133,159,.5)
}
.video-js .vjs-play-progress,.video-js .vjs-slider-bar,.video-js .vjs-volume-level{
    background:#fff
}
.video-js .vjs-load-progress{
    background:#bfc7d3;
    background:rgba(115,133,159,.5)
}
.video-js .vjs-load-progress div{
    background:#fff;
    background:rgba(115,133,159,.75)
}
.vjs-poster img{
    width:100%;
    height:100%
}
.video-container{
    position:relative;
    border:1px solid grey;
    width:100%
}
.click-to-play{
    position:absolute;
    left:0;
    top:0;
    right:0;
    bottom:0;
    z-index:10;
    width:100%;
    height:100%;
    cursor:pointer;
    transition:all .2s ease-in-out
}
.click-to-play:hover{
    outline:1px solid rgba(250,250,250,.5);
    outline-offset:-1px
}
.play-button{
    font-size:3em;
    line-height:1.5em;
    height:2em;
    width:2em;
    display:block;
    position:absolute;
    top:10px;
    left:10px;
    padding:0;
    cursor:pointer;
    opacity:1;
    background-color:#2b333f;
    background-color:rgba(43,51,63,.7);
    background-image:url("data:image/svg+xml,%3Csvg xmlns='http://www.w3.org/2000/svg' viewBox='0 0 448 512' width='25' title='play' fill='%23fff'%3E%3Cpath d='M424.4 214.7L72.4 6.6C43.8-10.3 0 6.1 0 47.9V464c0 37.5 40.7 60.1 72.4 41.3l352-208c31.4-18.5 31.5-64.1 0-82.6z' /%3E%3C/svg%3E");
    background-repeat:no-repeat;
    background-position:54% center;
    border-radius:2em;
    transition:all .4s;
    z-index:1000;
    left:50%;
    top:50%;
    transform:translate(-50%,-50%)
}
.video-container:hover button.play-button{
    background-color:#d52484
}
.muted-container{
    position:absolute;
    left:50%;
    top:50%;
    transform:translate(-50%,-50%);
    display:flex;
    flex-direction:column;
    justify-content:center;
    align-items:center;
    text-align:center;
    border:2px solid #fff;
    width:calc(90% - 40px);
    height:calc(90% - 40px);
    background-color:rgba(57,116,255,.75);
    border-color:#fff;
    color:#fff;
    border-radius:4px;
    border:2px solid #fff;
    border-radius:4px;
    box-shadow:-1px 3px 17px 3px rgba(0,0,0,.75);
    z-index:20;
    font-size:clamp(1.75rem,2.75vw,2.7rem);
    font-weight:700;
    line-height:1.2;
    text-align:center;
    cursor:pointer;
    max-width:625px
}
.muted-container.hidden{
    display:none
}
.icon-muted.fakecss{
    background-image:url("data:image/svg+xml,%3Csvg xmlns='http://www.w3.org/2000/svg' width='86' height='78' viewBox='0 0 86 78' class='AutoPlayBox__icon'%3E%3Cpath fill='white' fill-rule='evenodd' d='M44.28 9.05a2 2 0 0 0-3.23-1.58L19.74 24.05a1.9 1.9 0 0 0-1.01.39H5.03a4.5 4.5 0 0 0-4.5 4.48V48.8c0 1.17.46 2.32 1.33 3.17.85.86 2 1.32 3.16 1.32h14.22l21.81 16.96a2 2 0 0 0 3.23-1.58V9.05ZM17.93 28.44H5.03a.5.5 0 0 0-.34.15l-.03.03a.42.42 0 0 0-.12.3V48.8c0 .14.05.24.12.3l.06.07c.06.06.17.12.3.12h12.9V28.44Zm4 21.86 18.35 14.28V13.14L21.93 27.4v22.9Z'%3E%3C/path%3E%3Cg fill='none' fill-rule='evenodd' stroke='white' stroke-width='4' stroke-linecap='round'%3E%3Cpath d='M51.68 27.75c7.37 6.75 8.07 14.09 0 22.2' class='AutoPlayBox__icon__blink'%3E%3C/path%3E%3Cpath d='M60.92 18.05c13.65 15.58 11.9 29.21-.06 41.57' class='AutoPlayBox__icon__blink'%3E%3C/path%3E%3Cpath d='M69.27 8.25c19.2 20.51 17.82 40.9.41 61.19' class='AutoPlayBox__icon__blink'%3E%3C/path%3E%3Cpath d='m79.17 2.55-72.6 72.6'%3E%3C/path%3E%3C/g%3E%3C/svg%3E");
    width:28%;
    height:28%;
    background-size:contain;
    background-repeat:no-repeat;
    background-position:center;
    margin-bottom:2vw
}
div.icon-muted.fakecss{
    -webkit-animation:pulse 3s infinite ease-in-out;
    -o-animation:pulse 3s infinite ease-in-out;
    -ms-animation:pulse 3s infinite ease-in-out;
    -moz-animation:pulse 3s infinite ease-in-out;
    animation:pulse 3s infinite ease-in-out
}
.icon-muted{
    width:28%;
    height:28%;
    margin-bottom:2vw
}
.AutoPlayBox__content .AutoPlayBox__icon__blink{
    -webkit-animation:AutoPlayBox__blink 2s infinite;
    animation:AutoPlayBox__blink 2s infinite;
    opacity:0
}
.AutoPlayBox__content .AutoPlayBox__icon__blink:nth-child(2){
    -webkit-animation-delay:.3s;
    animation-delay:.3s
}
.AutoPlayBox__content .AutoPlayBox__icon__blink:nth-child(3){
    -webkit-animation-delay:.6s;
    animation-delay:.6s
}
.AutoPlayBox__icon{
    width:100%;
    height:100%
}
@-webkit-keyframes AutoPlayBox__blink{
    0%{
        opacity:0
    }
    33%{
        opacity:1
    }
    66%{
        opacity:1
    }
    100%{
        opacity:0
    }
}
@keyframes AutoPlayBox__blink{
    0%{
        opacity:0
    }
    33%{
        opacity:1
    }
    66%{
        opacity:1
    }
    100%{
        opacity:0
    }
}
@-webkit-keyframes pulse{
    0%{
        -webkit-transform:scale(.9);
        opacity:.7
    }
    50%{
        -webkit-transform:scale(1);
        opacity:1
    }
    100%{
        -webkit-transform:scale(.9);
        opacity:.7
    }
}
@keyframes pulse{
    0%{
        transform:scale(.9);
        opacity:.7
    }
    50%{
        transform:scale(1);
        opacity:1
    }
    100%{
        transform:scale(.9);
        opacity:.7
    }
}
.no-click{
    pointer-events:none
}
.max-h-720{
    display:flex;
    height:auto;
    max-height:calc(720px * (1/1))
}

/* hide big play button */
/* .video-js.vjs-has-started.vjs-playing.vjs-user-inactive .vjs-big-play-button {
    opacity: 0;
    visibility: hidden;
    display: none;
} */
/* #video-element.video-js:not(.vjs-playing) .vjs-big-play-button {
    opacity: 1;
    visibility: visible;
    display: block;
} */

/* show big play btn on first click */
/* #video-element.vjs-has-started.vjs-playing.vjs-user-inactive {
    pointer-events: none !important;
} */

</style>


<div class="flex flex-col w-full items-center justify-center relative">

  <div id="video-wrapper" class="flex flex-col justify-center items-center w-full mx-auto">
    <div class="muted-container <?php echo $autoplay ? '' : 'hidden'; ?>">
      <div class="icon-muted">
        <div class="AutoPlayBox__content">
          <svg width="86" height="78" viewBox="0 0 86 78" class="AutoPlayBox__icon">
            <path fill="currentColor" fill-rule="evenodd"
              d="M44.28 9.05a2 2 0 0 0-3.23-1.58L19.74 24.05a1.9 1.9 0 0 0-1.01.39H5.03a4.5 4.5 0 0 0-4.5 4.48V48.8c0 1.17.46 2.32 1.33 3.17.85.86 2 1.32 3.16 1.32h14.22l21.81 16.96a2 2 0 0 0 3.23-1.58V9.05ZM17.93 28.44H5.03a.5.5 0 0 0-.34.15l-.03.03a.42.42 0 0 0-.12.3V48.8c0 .14.05.24.12.3l.06.07c.06.06.17.12.3.12h12.9V28.44Zm4 21.86 18.35 14.28V13.14L21.93 27.4v22.9Z">
            </path>
            <g fill="none" fill-rule="evenodd" stroke="currentColor" stroke-width="4" stroke-linecap="round">
              <path d="M51.68 27.75c7.37 6.75 8.07 14.09 0 22.2" class="AutoPlayBox__icon__blink"></path>
              <path d="M60.92 18.05c13.65 15.58 11.9 29.21-.06 41.57" class="AutoPlayBox__icon__blink"></path>
              <path d="M69.27 8.25c19.2 20.51 17.82 40.9.41 61.19" class="AutoPlayBox__icon__blink"></path>
              <path d="m79.17 2.55-72.6 72.6"></path>
            </g>
          </svg>
        </div>
      </div>
      <div>Your Video Is Playing <br> Click To Unmute</div>
    </div>
    <video-js 
        id="video-element" 
        class="video-js vjs-default-skin w-full" 
        preload="auto" 
        playsinline>
      <source src="<?= $video_url; ?>" type="<?= $file_type; ?>" />
    </video-js>
  </div>

</div>


<script src="https://vjs.zencdn.net/8.3.0/video.min.js"></script>
<script>
const container = document.getElementById("video-wrapper");
const mutedPanel = document.querySelector(".muted-container");
var mutedPanelUp = true;

// var videoOptions = {autoplay: 'muted'};
var videoOptions = {
  preload: 'auto',
  width: '768',
  height: '768',
  disablePictureInPicture: true,
  loop: false,
  autoplay: false,
  muted: false,
  controls: true
};

<?php if($autoplay): ?>
    videoOptions.muted = true;
    videoOptions.autoplay = true;
<?php else: ?>
    videoOptions.poster = '<?= $overlay; ?>'
<?php endif; ?>

<?php if($square): ?>
    videoOptions.aspectRatio = '1:1';
<?php endif; ?>

// allows for custom options
videojs.options.autoSetup = false;
console.warn = () => {};
var player = videojs('video-element', videoOptions, function onPlayerReady() {

  var containerBuy = document.getElementById('container-buy');

  var ctaPop = false
  // Event listener for specific time in video
  this.on('timeupdate', function() {

    if (this.currentTime() > <?= $drop_time?> && !ctaPop) {
      console.log('show container-buy');
      ctaPop = true;
      if (containerBuy) {
        containerBuy.classList.remove('hidden');
        containerBuy.scrollIntoView({
          behavior: "smooth",
          block: "center"
        });
      }
    }
  })

  // Event Listener for player loaded/started
  this.on('loadedmetadata', function() {
    console.log('video loaded');
    <?php if($autoplay): ?>
    this.play();
    <?php endif; ?>
  });

  // Ended Event listener
  this.on('ended', function() {
    console.log('finished');
  });

  mutedPanel.addEventListener('click', () => {
    this.currentTime(0);
    this.play();
    this.muted(false);
    mutedPanel.classList.add('hidden');
    mutedPanelUp = false;

    // container.classList.add('no-click');
  })

});

window.addEventListener('click', (event) => {
  if (mutedPanelUp) {
    mutedPanel.click();
  }
});

// pause video on tab exit, play on tab back
var documentVisible = true;
var videoExitTime = 0;
document.addEventListener("visibilitychange", function (event) {
  if (document.visibilityState === 'visible') {
    documentVisible = true;
    console.log('User is here', documentVisible);
    if (documentVisible) {
      player.currentTime(videoExitTime);
      player.play();
    }
  }
  if (document.visibilityState === 'hidden') {
    documentVisible = false;
    videoExitTime = player.currentTime();
    console.log('User is gone', documentVisible);
    setTimeout(() => {
      if (!documentVisible) {
        player.pause();
      }
    }, "1000");
  }
});

console.log('Video: ', '<?= $video_id; ?>');
console.log('Drop Time: ', '<?= $drop_time?>');
</script>