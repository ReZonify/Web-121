<?php include 'includes/header.php'?>
<!-- Waiting for attorneys office to set up on recaptcha delayed by corona virus. To be inserted soon -->
<!-- Main content: shift it to the right by 250 pixels when the sidebar is visible -->
<div class="w3-main" style="margin-left:250px">

  <div class="w3-row w3-padding-64">
    <div class="w3-twothird w3-container">
      <h1 class="w3-text-teal">Set up a Consultation</h1>
      <p><?php
        /*
         * Below are 2 different forms to be re-used       
         * 
         * Only use one at a time, comment out the other!       
         *
         */

        include 'includes/contact_include.php'; #site keys & code here
    
        $toAddress = "webdevwilly@gmail.com";  //place your/your client's email address here
        $toName = "Will Bulzomi"; //place your client's name here
        $website = "Contact Will";  //place NAME of your client's website

        echo loadContact('simple.php');#demonstrates a simple contact form
        //echo loadContact('multiple.php');#demonstrates multiple form elements

	?></p>
        <div class='embed-container'><iframe src='https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d2706.3260309000602!2d-122.4920796840252!3d47.288427979164844!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x54905488f947bdd9%3A0x3ad574d591dd34e3!2sHolman%20Law%2C%20PLLC!5e0!3m2!1sen!2sus!4v1585091013500!5m2!1sen!2sus' width='600' height='450' frameborder='0' style='border:0;' allowfullscreen='' aria-hidden='false' tabindex='0'></iframe></div>
    </div>
    <div class="w3-third w3-container">
      <p class="w3-border w3-padding-large w3-padding-32 w3-center">Blog Post</p>
      <p class="w3-border w3-padding-large w3-padding-64 w3-center">Ext. Link</p>
    </div>
  </div>


  <?php include 'includes/footer.php'?>
