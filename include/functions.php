<?php

//TODO: Add logging function

//TODO: Add performance timing Function

//TODO: Add Sticky API Functions

//TODO: Add Maropost API Functions

//TODO: Add helper functions 

function setParameters($param)
{
    
}

function obfuscateString($s) 
{
    global $site;
    if ($site['debug'] == true) { global $debugbar;}
    if ($site['debug'] == true) { $debugbar['time']->startMeasure('encoding', 'Encoding URL'); }
        $secretHash = $site['urlkey'];
        return openssl_encrypt($s, 'AES-256-CBC', $secretHash, 0, 'Q[MGzrE@S97C">83');
    if ($site['debug'] == true) {  $debugbar['time']->stopMeasure('encoding'); }
}

function unobfuscateString($s)
{
    global $site;
    if ($site['debug'] == true) {global $debugbar;} 
    if ($site['debug'] == true) { $debugbar['time']->startMeasure('decoding', 'Decoding URL');}
        $secretHash = $site['urlkey'];
        return openssl_decrypt($s, 'AES-256-CBC', $secretHash, 0, 'Q[MGzrE@S97C">83');
    if ($site['debug'] == true) {  $debugbar['time']->stopMeasure('decoding'); }
}

//TODO: Add developer / debug

//TODO: Template Functions

function template($template, $templatePath = 'page-defaults', $vwoVariable = null) {
    global $site;
    global $company;
    global $debugbarRenderer;
    global $debugbar;

    require_once ('../'.$templatePath.'/'.$template.'.php');
}