<?php 
include 'dbcon.php';//database connection
$con = connect();


$block_name=$_POST['block_name'];
$ip_address=$_SERVER['REMOTE_ADDR'];


$result = $con->query("SELECT * FROM block WHERE block_name='$block_name'") or die($con->error());
if ( $result->num_rows > 0 ) {
    echo "<script type='text/javascript'>alert('Block Already Exists');window.open('add_block.php','_self');</script>";
}
else {		
	$sql="INSERT INTO block(block_name, created_date, updated_date, ip_address) VALUES('$block_name',NOW(),NOW(),'$ip_address')";
	//print_r($sql);die;
	mkdir($block_name);
		if(mysqli_query($con,$sql)){
			echo "<script type='text/javascript'>alert('Block Added Successfully!');window.open('add_block.php','_self');</script>";
		}
		else{
			echo mysql_error();
		}
}


?>
