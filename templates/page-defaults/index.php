<?php

//not ready for primetime, sending to 1 of 2 wsl randomly
if (mt_rand(0,1) == 0) {
    header('Location: https://novusframework.com/wsl/energy' );
    exit;
} else {
    header('Location: https://novusframework.com/wsl/memory' );
    exit;
}