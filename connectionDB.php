<?php
	$servername = "localhost"; 
	$username = "root"; 
	$password = "";
	$database = "dbbiomynd";
	$con = new mysqli($servername, $username, $password,$database) or die("Failed".mysql_error());
?>