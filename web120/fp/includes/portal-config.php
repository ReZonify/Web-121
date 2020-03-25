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
    $title = "Wills's Home Page";
    $logo = "fa-home";
    $PageID = 'Welcome';
    break;

    case 'attorneys.php':
    $title = "Meet the Team";
    $logo = "fa-universal-access";
    $PageID = '';
    break;
    
    case 'practice.php':
    $title = "Practices";
    $logo = "fa-universal-access";
    $PageID = 'Flowchart';
    break;

    case 'recent.php':
    $title = "Recent Successes";
    $logo = "fa-paper-plane-o";
    $PageID = '';
    break;
    
    case 'contact.php':
    $title = "Contact Us";
    $logo = "fa-paper-plane-o";
    $PageID = '';
    break;
        
    default:    
    $title = THIS_PAGE;    
    $logo = '';//no icon by default
    $PageID = 'Welcome';
}



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
