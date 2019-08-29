<!DOCTYPE html>
<html lang="en">
<?php 
$page="Add_Notification"; include "header.php"; ?>
<body>
<?php $page="Add_Notification"; include "acc_nav.php"; ?>
<br>

<div class="container">
	<div class="row">
		<div class="col-md-12">
			<div class="row">
				<div class="col-md-12">
					<div class="borders">
						<form action="upload_topic.php" autocomplete="off" enctype="multipart/form-data" method="post">
						  <h2>Add Notification</h2>
						  <div class="form-group">
							<label for="block">Block:</label>
<?php
		$get=mysqli_query($con,"SELECT * FROM block ORDER BY id ASC");
		$option = '';
		while($row = mysqli_fetch_assoc($get)){$option .= '<option value = "'.$row['block_name'].'">'.$row['block_name'].'</option>';}
		?>
	<select class="form-control" required name="block">
		<?php echo $option; ?>
	</select>
						  </div>
						  <div class="form-group">
							<label for="scheduler">Scheduler:</label>
							<input type="datetime-local" class="form-control" id="scheduler" required name="scheduler">
						  </div>
						  <div class="form-group">
							<label for="scheduler_when">Scheduler:</label><br>
							  <div class="custom-control custom-radio custom-control-inline">
								<input type="radio" class="custom-control-input" id="customRadio1" name="scheduler_when" value="Now">
								<label class="custom-control-label" for="customRadio1">Now</label>
							  </div>
							  <div class="custom-control custom-radio custom-control-inline">
								<input type="radio" class="custom-control-input" id="customRadio2" name="scheduler_when" value="One_Time">
								<label class="custom-control-label" for="customRadio2">One Time</label>
							  </div> 
							  <div class="custom-control custom-radio custom-control-inline">
								<input type="radio" class="custom-control-input" id="customRadio3" name="scheduler_when" value="Repeat">
								<label class="custom-control-label" for="customRadio3">Repeat</label>
							  </div>
							  <div class="custom-control custom-radio custom-control-inline">
								<input type="radio" class="custom-control-input" id="customRadio4" name="scheduler_when" value="Weekly">
								<label class="custom-control-label" for="customRadio4">Weekly</label>
							  </div> 
						  </div>
						  <div class="form-group">
							<label for="">Select Day:</label>
							<select class="form-control" required  name="select_day">
								<option>Sunday</option>
								<option>Monday</option>
								<option>Tuesday</option>
								<option>Wednesday</option>
								<option>Thursday</option>
								<option>Friday</option>
								<option>Saturday</option>
							</select>
						  </div>
						  <div class="form-group">
							<label for="file">Select File:</label>
								<div class="custom-file mb-2">
									<input type="file" class="custom-file-input" id="customFile" name="input_file">
									<label class="custom-file-label" for="customFile">Choose file</label>
								</div>
						  </div>
						  <button type="submit" class="btn btn-primary" name="btn-upload">Add Notification</button>
						</form>
					</div>
				</div>
			</div>
		</div>
	</div>
</div>

</body>
</html>

<script>
	// Add the following code if you want the name of the file appear on select
	$(".custom-file-input").on("change", function() {
	  var fileName = $(this).val().split("\\").pop();
	  $(this).siblings(".custom-file-label").addClass("selected").html(fileName);
	});
</script>