<?php
	require 'dbcon.php';	$con=connect();		session_start();
	$admin_email_id= $_SESSION['admin_email_id']; 
	$sqlz="select * from users where email='$admin_email_id'";
	$result_set=mysqli_query($con,$sqlz);
	$row = mysqli_fetch_array($result_set);
	$admin= $row['email'];?>
<nav class="navbar navbar-expand-md bg-dark navbar-dark">
	<a class="navbar-brand" href="#">VSpeaker Monitoring</a>
	<button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#collapsibleNavbar">
		<span class="navbar-toggler-icon"></span>
	</button>
	<div class="collapse navbar-collapse" id="collapsibleNavbar">
		<ul class="navbar-nav">
			<li class="nav-item">
				<a class="nav-link <?php if($page=="Dashboard")echo"active"?>" href="dashboard.php">Dashboard</a>
			</li>
			<li class="nav-item">
				<a class="nav-link <?php if($page=="Update_Notification")echo"active"?>"  title="Update Notification"  href="update_notification.php">Update</a>
			</li>
			<li class="nav-item">
				<a class="nav-link <?php if($page=="Add_Notification")echo"active"?>" title="Add Notification" href="add_notification.php">Add</a>
			</li>
			
			<li class="nav-item">
				<a class="nav-link <?php if($page=="Add_Block")echo"active"?>" href="add_block.php">Add Block</a>
			</li>
			<li class="nav-item">
				<a class="nav-link" <?php if($page=="Profile")echo"active"?>" title="Profile" href="profile.php"><?php echo $admin;?></a>
			</li>
			<li class="nav-item">
				<a class="nav-link" href="logout.php">Logout</a>
			</li>
		</ul>
	</div>  
</nav>

<?php
	if(!isset($_SESSION['admin_email_id']))
	{
		echo '<script >location.href ="index.php" </script>';
	}
 ?>