<!DOCTYPE html>
<html lang="en">
<?php $page="Add_Block"; include "header.php"; ?>
<body>
<?php $page="Add_Block"; include "acc_nav.php"; ?>
<br>

<div class="container">
	<div class="row">
		<div class="col-md-12">
			<div class="row">
				<div class="col-md-12">
					<div class="borders">
						<form action="upload_block.php" autocomplete="off" enctype="multipart/form-data" method="post">
						  <h2>Add Block</h2>
						  <div class="form-group">
							<label for="block_name">Block Name:</label>
							<input type="text" class="form-control" id="block_name" required name="block_name" placeholder="Enter Block Name">
						  </div>
						  <button type="submit" class="btn btn-primary" name="btn-upload">Add Block</button>
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