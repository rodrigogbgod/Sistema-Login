<?php 
	session_start();
	session_destroy();
	$index = "../index.html";
	header("Location:$index");

 ?>