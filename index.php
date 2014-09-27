<?php 
 
$page = "Home";

 require_once "header.php"; 
 //content
 include "login.php";

global $prostats;
?>
<div class="clickMe">
    <a>Links Here</a>
</div>
    <div class="jumbotron">
      <div class="container">
        <h1>EliteKast Development</h1>
        <p>Teaching and learning at the same time</p>
        <a href="http://products.elitekastdev.com" title="Status: <?php print $prostats; ?>">Products</a>
      </div>
    </div>
    <div class="neighborhood-guides">
     <div class="container">
      <h2>Location</h2>
      <p>Here is a few locations on this website where you can learn or other!</p>
       <div class="row">
        <div class="col-md-4">
         <div class="thumbnail">
          <a href="http://devs.elitekastdev.com/"><img src="img/Devs.png"></a>
         </div>
         <div class="thumbnail">
          <a href="http://forums.elitekastdev.com/"><img src="img/Forums.png"></a>
         </div>
        </div>
        <div class="col-md-4">
         <div class="thumbnail">
          <a href="http://tutorials.elitekastdev.com"><img src="img/Tutorials.png"></a>
         </div>
         <div class="thumbnail">
             <a href="http://tutorials.elitekastdev.com/assets/"><img src="img/Assets.png"></a>
         </div>
        </div>
        <div class="col-md-4">
         <div class="thumbnail">
          <a href="http://games.elitekastdev.com/"><img src="img/Games.png"></a>
         </div>
         <div class="thumbnail">
          <a href="http://wiki.elitekastdev.com/"><img src="img/Wiki.png"></a>
         </div>
        </div>
       </div>
     </div>
    </div>
    <div class="learn-more">
	  <div class="container">
		<div class="row">
	      <div class="col-md-4">
			<h3>Videos for everyone</h3>
			<p>From learning the basics about code to learning how to use our assets!</p>
			<p><a href="http://youtube.com/EliteKastDev" target="_blank">YouTube</a></p>
	      </div>
		  <div class="col-md-4">
			<h3>Come code with us!</h3>
			<p>Livestreamed events and more, join us at twitch!</p>
			<p><a href="http://twitch.tv/elitekastdev" target="_blank">Twitch</a></p>
		  </div>
		  <div class="col-md-4">
			<h3>Keep in contact</h3>
			<p>Twitter</p>
			<p><a href="http://twitter.com/EliteKastDev" target="_blank">@EliteKastDev</a></p>
		  </div>
	    </div>
	  </div>
	</div>
<?php

 require_once "footer.php";
 
?>