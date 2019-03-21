<?php
//config.php

//enables page to know its own name
define('THIS_PAGE', basename($_SERVER['PHP_SELF']));

//helps prevent date errors
date_default_timezone_set('America/Los_Angeles');

//re-CAPTCHA details
$siteKey = "6LdumosUAAAAAPE81lKo6lih-3uyHnC-1YC_qonc";
$secretKey = "6LdumosUAAAAAOPBOcL2hdv45wTFmux5aKDcT4et";

//default in case pages don't have titles
$title = THIS_PAGE;

switch(THIS_PAGE){

    case 'index.php':
        $title = 'The Candle Store';
    break;

    case 'main.php':
        $title = 'TCS - Main Scents';
    break;

    case 'custom.php':
        $title = 'TCS - Custom Scents';
    break;

    case 'calendar.php':
        $title = 'Event Sign Up';
    break;

    case 'contact.php':
        $title = 'Contact Us';
    break;

    case 'social.php':
        $title = 'Blog/Social Media';
    break;

    case 'press.php':
        $title = 'Press';
    break;
}

?>