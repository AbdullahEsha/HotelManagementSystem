<?php 
	//session_start();
	require_once('../services/chef_staffservice.php');

	//if(isset($_POST['submit'])){
		// `email`, `name`, `password`, `phone`, `profile_picture`, `userType`, `dateOfBirth`

		$name     = $_POST['name'];
        $phone    = $_POST['phone'];
	    $userType = $_POST['userType'];
	    $email    = $_POST['email'];
	    $password = $_POST['password'];
	    $conpassword = $_POST['confirmPassword'];
	    //$dob      = $_POST['dob'];
	    $picture  = $_POST['picture'];

		//if((empty($username) || empty($username) || empty($username) || empty($password) || empty($email)){
			//header('location: ../views/register.php?error=null_value');
		//}else{

			$user = [
				'name'    => $name,
				'password'=> $password,
				'email'   => $email,
				'phone'   => $phone,
				'userType'=> $userType,
				'picture' => $picture
				//'dob'     => $dob
				//'dateOfBirth'=> $dob
			];

			if($password == $conpassword){

				$status = insert($user);
			}
			else
			{
				header('location: ../views/register.php?error=conPass != pass!');
			}

			
			//echo $status;

			// if($status){
			// 	header('location: ../views/login.php?success=registration_done');
			// }else{
			// 	header('location: ../views/register.php?error=db_error');
			// }
		
	



?>