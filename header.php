<?php
$currentYear = 2014;

error_reporting(0); // we don't want to see errors on screen
// Start a session
session_start();
require_once ('http://elitekastdev.com/user/db_connect.inc.php'); // include the database connection
require_once ("http://elitekastdev.com/user/functions/functions.inc.php"); // include all the functions
$seed="0dAfghRqSTgx"; // the seed for the passwords
$domain =  "elitekastdev.com"; // the domain name without http://www.

$prostat = "offline";

?>
<!DOCTYPE html>
<html><head>
        <title>ECD | <?php echo $page; ?></title>
        
        <link href="http://s3.amazonaws.com/codecademy-content/courses/ltp/css/bootstrap.css" rel="stylesheet">
        <link href="css/main.css" rel="stylesheet">
    
        <script type="text/javascript" src="http://code.jquery.com/jquery-1.10.2.min.js"></script>
        <script type="text/javascript" src="js/buttons.js"></script>
        <script type="text/javascript" src="js/main.js"></script>
    </head>
<body>
    <div class="nav">
      <div class="container">
        <ul class="pull-left">
          <li><a href="http://elitekast.com">EliteCast</a></li>
          <li><a href="http://elitecraft.elitekast.com">EliteCraft</a></li>
        </ul>
        <ul class="pull-right">
          <li><a class="signup" href="#signup">Sign Up</a></li>
          <li><a class="login" href="#login">Log In</a></li>
        </ul>
      </div>
    </div>
<h3><abbr title="Really you hover over me :(">NOTE: ALL SHORTENED WORDS WILL HAVE HOVER TEXT</abbr></h3>
<div class="menu">
      <div class="menuClose">
        <img src="http://s3.amazonaws.com/codecademy-content/courses/ltp2/img/uber/close.png">
      </div>
      
      <p>Click one of the links below</p>
      
      <ul>
        <li><a href="http://elitekast.com">EliteCast</a> | </li>
        <li><a href="http://elitekastdev.com">Home</a> | </li>
        <li><a href="http://games.elitekastdev.com">Games</a> | </li>
        <li><a href="http://devs.elitekastdev.com">Developers</a> | </li>
        <li><a href="http://forums.elitekastdev.com">Forums</a> | </li>
        <li><a href="http://wiki.elitekastdev.com">Wiki</a> | </li>
        <li><a href="http://faq.elitekastdev.com">FAQ</a> | </li>
        <li><a href="http://tutorials.elitekastdev.com">Tutorials</a> | </li>
        <li><a href="http://elitekastdev.com/contact">Contact Us</a> | </li>
        <li><a href="http://elitekastdev.com/about">About Us</a></li>
      </ul>
</div>