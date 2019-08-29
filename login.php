<?php
require 'dbcon.php';
$con=connect();
//print_r($_POST);die;
$email = $_POST['email'];
$result = $con->query("SELECT * FROM users WHERE email='$email'");
if ( $result->num_rows == 0 ){ // User doesn't exist
    echo "<script type='text/javascript'>alert('User with that email doesnt exist!');window.open('index.php','_self');</script>";
}
else { // User exists
    $user = $result->fetch_assoc();
    if ( password_verify($_POST['password'], $user['password']) ) {
		$email1=$user['email'];
		
        session_start();	
		$_SESSION['admin_email_id'] = $email;
		echo "<script type='text/javascript'>alert('Login Successful!');window.open('dashboard.php','_self');</script>";
    }
    else {
		echo "<script>alert('Invalid parameters provided for account verification! Login failed!');window.open('index.php','_self');</script>";
    }
}