<!DOCTYPE html>
<html lang="en">
<?php $page="Dashboard"; include "header.php"; ?>
<body>
<?php $page="Dashboard"; include "acc_nav.php"; ?>
<br>

<div class="container">
	<div class="row">
		<div class="col-6 ">
			<div class="borders">Total Files
			<?php
	//include 'dbcon.php';
	//$con = connect();
	$sql="SELECT count(id) as total FROM topic";
	$result_set=mysqli_query($con,$sql);
	while($row = mysqli_fetch_array($result_set))
	{
		echo $row['total'];
	}
		?>
		</div>
		</div>
		<div class="col-6 ">
			<div class="borders">Total Files</div>
		</div>
	</div>
</div>

</body>
</html>