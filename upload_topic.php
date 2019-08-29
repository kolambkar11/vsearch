<?php
include 'dbcon.php';//database connection
$con = connect();
if(isset($_POST['btn-upload'])){
	
	if (($_FILES['input_file']['name']!="")){
        // Where the file is going to be stored
			$block = $_POST['block'];
			$scheduler1= $_POST['scheduler'];
			$scheduler = date('Y-m-d_h:i:s', strtotime($scheduler1));
			$scheduler_when = $_POST['scheduler_when'];
			$select_day = $_POST['select_day'];
			$file = $_FILES['input_file']['name'];
			$path = pathinfo($file);
			$filename = $path['filename'];
			$ext = $path['extension'];
			$temp_name = $_FILES['input_file']['tmp_name'];
			$get_block="SELECT * from block where block_name='$block'";
			$block_name=mysqli_query($con,$get_block);
			$row = mysqli_fetch_array($block_name);
			$final_block=$row['block_name'];
			if($block==$final_block){
				$target_dir=$final_block."/";
			}
			$path_filename_ext = $target_dir.$filename.".".$ext;
           move_uploaded_file($temp_name,$path_filename_ext);
    }
	$final_file=$block."_".$scheduler."_".$scheduler_when."_".$select_day."_".$file;
	$path = pathinfo($final_file);
	$ip_address=$_SERVER['REMOTE_ADDR'];
	$sql="INSERT INTO topic(block, scheduler_date, scheduler_when, select_day, filename, created_date, updated_date, ip_address) VALUES('$block','$scheduler','$scheduler_when','$select_day','$final_file',NOW(),NOW(),'$ip_address')";
if(mysqli_query($con,$sql)){
	echo"<script type='text/javascript'>alert('File Successfully uploaded');window.location.href='add_notification.php';</script>";
}
else{
		echo "Failerd";
	echo mysql_error();
}
}
mysqli_close($con);
?>