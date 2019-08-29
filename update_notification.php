<!DOCTYPE html>
<html lang="en">
<?php $page="Update_Notification"; include "header.php"; ?>
<body>
<?php $page="Update_Notification"; include "acc_nav.php"; ?>
<br>

<div class="container">
	<div class="row">
		<div class="table-responsive" style="font-size:12px;">
  <table class="table">
    <thead>
      <tr style="white-space:nowrap;">
        <th>ID</th>
        <th>Block</th>
        <th>Scheduler Date</th>
        <th>Scheduler When</th>
        <th>Select Day</th>
        <th>Filename</th>
        <th>Created Date</th>
        <th>Updated Date</th>
        <th>IP Address</th>
      </tr>
    </thead>
        <?php
	//include 'dbcon.php';
	//$con = connect();
	$sql="SELECT * FROM topic";
	$result_set=mysqli_query($con,$sql);
	while($row = mysqli_fetch_array($result_set))
	{
		?>
        <tr class="success">
        <td class="user-name"><?php echo $row['id'] ?></td>
        <td class="user-name"><?php echo $row['block'] ?></td>
        <td class="user-email"><?php echo $row['scheduler_date'] ?></td>
        <td class="user-phone"><?php echo $row['scheduler_when'] ?></td>
        <td class="user-phone"><?php echo $row['select_day'] ?></td>
        <td class="user-phone"><?php echo $row['filename'] ?></td>
        <td class="user-phone"><?php echo $row['created_date'] ?></td>
        <td class="user-phone"><?php echo $row['updated_date'] ?></td>
        <td class="user-phone"><?php echo $row['ip_address'] ?></td>
        <td class="user-mobile">
			<!--<a target="_blank" href="uploads/<?php echo $row['Afile'] ?>">
			<?php echo $row['Aheader'].'-'.$row['Adate']?>
			</a>-->
		</td>
		<!--<td class="user-phone"><?php echo $row['CollegeName']?></td>-->
		</tr>
        <?php
	}
	mysqli_close($con);
	?>  
	</table>
  </div>
	</div>
</div>

</body>
</html>