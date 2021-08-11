<?php 
	session_start();
	//require_once('../php/session_header.php');
	require_once('../services/chef_staffservice.php');


	//add user
	if(isset($_POST['email'])){

		$status=checkEmail($_POST['email']);
		if($status)
		{
			echo "Email is already taken";
		}		
	}

?>