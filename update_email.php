<?php
include 'dbcon.php';
$con = connect();
//$ccode = $_POST['ccode'];
$changeemail = $_POST['cemail'];
$result = "UPDATE users SET email = '$changeemail' WHERE ID = '1'";
if(mysqli_query($con,$result))
{
		echo "<script type='text/javascript'>
		alert('Email is Updated.');
		window.location.href='profile.php';
		</script>";
}
else
{
	echo "<script type='text/javascript'>alert('This Email already exists. Please use another Emailid.');
window.location.href='profile.php';</script>";
}
		mysqli_close($con);
?>