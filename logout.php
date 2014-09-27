<?php 
session_start();
if( session_unregister('loginid') == true && session_unregister('username')==true ) {
    session_destroy();
	header('Location: index.php');
  } else {
   unset($_SESSION['loginid']);
   unset($_SESSION['username']);
   session_destroy();
   header('Location: index.php');
}
?>