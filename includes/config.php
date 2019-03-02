<?php
//config.php

include 'credentials.php';

//enables page to know its own name
define('THIS_PAGE', basename($_SERVER['PHP_SELF']));

//helps prevent date errors
date_default_timezone_set('America/Los_Angeles');

//noindex while builidng a client site in this space
$robots = "noindex,nofollow"
$meta_description = "Web development student."
$meta_keywords = "web developer, web development, web design, Python, CSS, HTML, PHP."

//default in case pages don't have titles
$title = THIS_PAGE;

switch(THIS_PAGE){

    case 'index.php':
        $title = 'Homepage';
        $logo = "fa-home";
    break;

    case 'big/index.php':
        $title = 'Big';
        $logo = "fa-search-plus";
    break;

    case 'AIA.php':
        $title = 'AIA';
        $logo = "fa-users";
    break;

    case 'flowchart.php':
        $title = 'Flowchart';
        $logo = "fa-project-diagram";
    break;

    case 'fp/index.php':
        $title = 'Final Project';
        $logo = "fa-fire-alt";
    break;

    case 'contactme.php':
        $title = 'Contact Ashley';
        $logo = "fa-address-card";
        $robots = "noindex,follow";
        $meta_description = "Please contact Ashley. I'm a " . $meta_description;
        $meta_keywords = "I am focused in the following areas: " . $meta_keywords;
    break;
}

//place URL & labels in the array here for navigation:
    $nav1['index.php'] = "Welcome";
    $nav1['big/index.php'] = "Big";
    $nav1['AIA.php'] = "AIA";
    $nav1['flowchart.php'] = "Flowchart";
    $nav1['fp/index.php'] = "Final Project";
    $nav1['contactme.php'] = "Contact Ashley";    

/*
makeLinks function will create our dynamic nav when called.
Call like this:
echo makeLinks($nav1); #in which $nav1 is an associative array of links
*/
function makeLinks($linkArray)
{
    $myReturn = '';

    foreach($linkArray as $url => $text)
    {
        if($url == THIS_PAGE)
        {//selected page - add class reference
	    	$myReturn .= '<li><a class="selected" href="' . $url . '">' . $text . '</a></li>' . PHP_EOL;
    	}else{
	    	$myReturn .= '<li><a href="' . $url . '">' . $text . '</a></li>'  . PHP_EOL;
    	}    
    }
      
    return $myReturn;    
}

?>