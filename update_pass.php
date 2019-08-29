<?php
include 'dbcon.php';
$con = connect();
$changepass = $_POST['cpass'];
//$newpassword=md5($changepass);
	$hash = password_hash($changepass, PASSWORD_DEFAULT);
	$result = mysqli_query($con,"UPDATE users SET password = '$hash' WHERE ID = '1'");
	echo "<script type='text/javascript'>alert('Password Updated.');window.location.href='profile.php';</script>";
mysqli_close($con);
//how to get disabled textbox value in php and stored it in database 
?>