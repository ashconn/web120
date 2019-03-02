<?php
//config.php

include 'credentials.php';

//enables page to know its own name
define('THIS_PAGE', basename($_SERVER['PHP_SELF']));

//helps prevent date errors
date_default_timezone_set('America/Los_Angeles');

//default in case pages don't have titles
$title = THIS_PAGE;

switch(THIS_PAGE){

    case 'index.php':
        $title = 'BIG Home';
        $logo = "fa-home";
    break;

    case '../index.php':
        $title = 'Web120 Portal';
        $logo = "fa-bank";
    break;

    case 'flexbox.php':
        $title = 'Flexbox';
        $logo = "fa-users";
    break;

    case 'galleries.php':
        $title = 'Galleries';
        $logo = "fa-project-diagram";
    break;

    case 'google.php':
        $title = 'Google';
        $logo = "fa-fire-alt";
    break;

    case 'calendar.php':
        $title = 'Calendar';
    break;

    case 'map.php':
        $title = 'Map';
    break;

    case 'youtube.php':
        $title = 'YouTube';
    break;

    case 'shoppingcarts.php':
        $title = 'Shopping Carts';
        $logo = "fa-shopping-cart";
    break;

    case 'siteapp.php':
        $title = 'Site vs App';
    break;

    case 'webcam.php':
        $title = 'Webcam';
    break;
}

?>