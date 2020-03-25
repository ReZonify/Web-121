<?php include 'portal-config.php'?>

<!DOCTYPE html>
<html lang="en">
<head>
<title><?=$title?></title>
<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">
<link rel="stylesheet" href="https://www.w3schools.com/lib/w3-theme-black.css">
<link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Roboto">
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
<link rel="stylesheet" href="css/default.css">
  
<a href="index.php"> <img src="images/desktop.jpg" class="desktop" alt=""></a>    
   
<body>
<!-- Old Header, waiting on grphic designer to submit new banner for header. To be redone -->

<!-- Navbar -->
<div class="w3-top">
  <div class="w3-bar w3-theme w3-top w3-left-align w3-large">
    <a class="w3-bar-item w3-button w3-right w3-hide-large w3-hover-white w3-large w3-theme-l1" href="javascript:void(0)" onclick="w3_open()"><i class="fa fa-bars"></i></a>
    <a href="index.php" class="w3-bar-item w3-button w3-theme-l1">Home</a>
    <a href="attorneys.php" class="w3-bar-item w3-button w3-hide-small w3-hover-white">Attorneys</a>
    <a href="practice.php" class="w3-bar-item w3-button w3-hide-small w3-hover-white">Areas of Practice</a>
    <a href="recent.php" class="w3-bar-item w3-button w3-hide-small w3-hover-white">Recent Successes</a>
    <a href="contact.php" class="w3-bar-item w3-button w3-hide-small w3-hover-white">Contact</a>
      </div>
</div>

<!-- Sidebar -->
<nav class="w3-sidebar w3-bar-block w3-collapse w3-large w3-theme-l5 w3-animate-left" id="mySidebar">
  <a href="javascript:void(0)" onclick="w3_close()" class="w3-right w3-xlarge w3-padding-large w3-hover-black w3-hide-large" title="Close Menu">
    <i class="fa fa-remove"></i>
  </a>
  <h4 class="w3-bar-item"><b>Menu</b></h4>
  <a class="w3-bar-item w3-button w3-hover-black" href="#">Legal Website</a>
  <a class="w3-bar-item w3-button w3-hover-black" href="#">Legal Resource</a>
  <a class="w3-bar-item w3-button w3-hover-black" href="#">Legal Website</a>
  <a class="w3-bar-item w3-button w3-hover-black" href="#">Legal Resource</a>
</nav>

<!-- Overlay effect when opening sidebar on small screens -->
<div class="w3-overlay w3-hide-large" onclick="w3_close()" style="cursor:pointer" title="close side menu" id="myOverlay"></div>
 <h2 class="pageID"><?=$PageID?></h2>