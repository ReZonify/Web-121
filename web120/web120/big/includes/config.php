<?php

/*
portal-config.php

Used to store all of our WEB120 configuration information

*/

//prevents data from being sent early
ob_start();

//this helps us avoid PHP date errors:
date_default_timezone_set('America/Los_Angeles');


//echo basename($_SERVER['PHP_SELF']);

define('THIS_PAGE',basename($_SERVER['PHP_SELF']));

$logo_color = ''; //make logo_color an empty string by default

switch(THIS_PAGE)
{
    
    case 'index.php':
    $title = "Client Questionnaire";
    $logo = "fa-universal-access";
    $PageID = 'Questionnaire';
    break;
    
    case 'flexbox.php':
    $title = "Research";
    $logo = "fa-universal-access";
    $PageID = 'Flexbox';
    break;

    case 'galleries.php':
    $title = "Research";
    $logo = "fa-paper-plane-o";
    $PageID = 'Galleries';
    break;
        
    case 'shoppingcarts.php':
    $title = "Research";
    $logo = "fa-paper-plane-o";
    $PageID = 'Shopping';
    break;
    
    case 'siteapp.php':
    $title = "Research";
    $logo = "fa-paper-plane-o";
    $PageID = 'Mobile v Responsive';
    break;

    case 'map.php':
    $title = "Map";
    $logo = "fa-paper-plane-o";
    $PageID = 'Maps';
    break;
    
    case 'calendar.php':
    $title = "Calendar";
    $logo = "fa-paper-plane-o";
    $PageID = 'Calendar';
    break;
        
    case 'youtube.php':
    $title = "Accessibility";
    $logo = "fa-paper-plane-o";
    $PageID = 'Accessibility';
    break;
        
    case 'webcam.php':
    $title = "Youtube";
    $logo = "fa-paper-plane-o";
    $PageID = 'Mobile v Responsive';
    break;
        
        
    default:    
    $title = THIS_PAGE;    
    $logo = '';//no icon by default
    $PageID = 'Welcome';
}



?>
