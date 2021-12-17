<?php 

// 
/*
If a client requests custom pixels to be added to the site,include them here.
This should be fired on every page, so via a proxy cron, through the queue manager
it will not load or show in the source. Variables will need to passed tith the pixel.
*/

switch ($url) {
    case "lander":
        //lander fire
        break;
    case "up01":
        //upsell 1 fire
        break;
    case "up02":
        //upsell 2 fire
        break;
    case "up03":
    case "up04":
    case "dn01":
    case "dn02":
    case "dn03":
    case "dn04":
    default:
        //the default action, if any.
}