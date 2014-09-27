<?php
$currentYear = 2014;

error_reporting(0); // we don't want to see errors on screen
// Start a session
session_start();
$seed="0dAfghRqSTgx"; // the seed for the passwords
$domain =  "WEBSITE URL"; // the domain name without http://www.
require_once ('http://' . $domain . '/user/db_connect.inc.php'); // include the database connection
require_once ("http://" . $domain . "/user/functions/functions.inc.php"); // include all the functions
?>
<!DOCTYPE html>
<html><head>
        <title>Login / Signup</title>
    </head>
<body>