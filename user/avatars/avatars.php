<?php

$page = "Avatars";

    require_once("http://elitekastdev.com/header.php");

$email = $_GET['email'];
$default = "default.png";
$size = 128;

$grav_url = "http://gravatar.com/avatar/" . md5( strtolower( trim( $email ) ) ) . "?d=" . urlencode( $default ) . "$s=" . $size;

?>
<!-- Start coding here -->
<p>UNDER CONSTRUCTION</p>
<img src="<?php echo $grav_url; ?>" alt="" />
<!-- Stop coding here -->
<?php

    require_once("http://elitekastdev.com/footer.php");

?>