<?php
ob_start();
session_start();

$session_name = "simple_login";
if($_SESSION['name'] != $session_name){
	header('location: login.php');
}

include("header.php");
?>

<?php

include("navbar.php");

?>




	
	
	<img src="images/img67.jpg" width="100%">

<?php include("footer.php"); ?>