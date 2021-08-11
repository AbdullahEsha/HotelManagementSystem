<?php
	session_start();

	if(!isset($_SESSION['name'])){
		header('location: ../common_pages/login.php?error=invalid_request');
	}
	
?>