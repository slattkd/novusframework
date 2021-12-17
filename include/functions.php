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
    global $debugbar;
    $debugbar['time']->startMeasure('encoding', 'Encoding URL');
        $secretHash = $site['urlkey'];
        return openssl_encrypt($s, 'AES-256-CBC', $secretHash, 0, 'Q[MGzrE@S97C">83');
    $debugbar['time']->stopMeasure('encoding');
}

function unobfuscateString($s)
{
    global $site;
    global $debugbar;
    $debugbar['time']->startMeasure('decoding', 'Decoding URL');
        $secretHash = $site['urlkey'];
        return openssl_decrypt($s, 'AES-256-CBC', $secretHash, 0, 'Q[MGzrE@S97C">83');
    
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