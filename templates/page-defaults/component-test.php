<?php
$_SESSION['pageType'] = 'wsl';
$current_step = 1;

$video_url = 'https://customer-fu1clsqwpnozbg2f.cloudflarestream.com/7a51c265a9816554550b5bff797ebf40/manifest/video.m3u8';
$video_id = "7a51c265a9816554550b5bff797ebf40";
$drop_time = "2459";
$square = false;
$controls = false;
$overlay = "//s3.amazonaws.com/flora-spring/animatedposter.gif";
?>

<head>
    <?php template("includes/header"); ?>
    <title>Test Page</title>
    <style>
        /* video player aspect ratio */
    <?php if($square): ?>
        #video-wrapper {
            aspect-ratio: 1/1;
        }
    <?php endif; ?>
    /* video player controls hide/show */
    <?php if($controls): ?>
        #video-element.vjs-has-started.vjs-user-inactive.vjs-playing .vjs-control-bar {
            visibility: visible;
            opacity: 1;
            transition: visibility 1s, opacity 1s;
            user-select:auto;
        }
    <?php else: ?>
        #video-element.video-js.vjs-controls-enabled .vjs-control-bar {
            visibility: hidden;
            opacity: o;
            transition: visibility 1s, opacity 1s;
            user-select:auto;
        }
    <?php endif; ?>

    /* hide big play button */
    #video-element.video-js .vjs-big-play-button {
        opacity: 0;
        visibility: hidden;
        display: none;
        pointer-events: none !important;
    }
    #video-element.vjs-has-started.vjs-playing {
        pointer-events: none !important;
    }

    #video-wrapper.flex.w-full {
        max-width: 1280px;
        max-height: 90vh;
    }
    </style>
</head>
<body>
<div class="container mx-auto" style="padding: 3rem 0">
    <?php step("includes/step_bar", $current_step ); ?>
    <div class="flex mt-11">
    <?php step("includes/step_bar2", $current_step ); ?>
    </div>

    <div class="flex mt-11 justify-center max-w-lg">
    <?php videoJS('includes/videojs-player', $video_id, $video_url, $drop_time, $overlay, $controls, $square);?>
    </div>
</div>
</body>