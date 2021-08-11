<?php
    include "../db/DB_Config.php";
    session_start();
    if(isset($_POST['id'])){
        $name_new           = $_POST['name'];
        $email_new          = $_POST['email'];
        $password_new       = $_POST['password'];
        $phone              = $_POST['phone'];
        $confirmPassword    = $_POST['confirmPass'];
        $day_new            = $_POST['day'];
        $month_new          = $_POST['month'];
        $year_new           = $_POST['year'];
        $new_dob            = "$year_new-$month_new-$day_new";
        $profile_picture_new= $_POST["fileUpload"];
        $uid = $_POST['id'];
        if($password_new == $confirmPassword){
            $query      = "UPDATE users set name='$name_new', email='$email_new', password='$password_new', dateOfBirth='$new_dob',phone='$phone',profile_picture='$profile_picture_new' where id = '$uid'";
            $adduser    = mysqli_query($db, $query);
            $_SESSION['username'] = $name_new;
            if ( $adduser ){
                echo 1;
            }
            else{
                die("Connection Failed. Please try again later..." . mysqli_error($db));
                echo "false".mysqli_error($db);
            }
        }
        else{
            echo "INVALID";
        }
    }
    else{
        echo "INVALID Submission";
    }
?>