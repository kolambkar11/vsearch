<!DOCTYPE html>
<html lang="en">
<?php $page="Profile"; include "header.php";?>
<body>
<?php $page="Profile"; include "acc_nav.php"; ?>
<br>

<div class="container">
	<div class="row">
		<div class="col-md-12">
			<div class="row">
			<div class="col-md-6">
			<div class="borders">
				<form action="update_pass.php" autocomplete="off" method="post">
				  <h2>Change Password</h2>
				  <div class="form-group">
					<label for="pwd">New Password:</label>
					<input type="password" class="form-control" id="pwd" name="npass" placeholder="New Password">
				  </div>
				  <div class="form-group">
					<label for="cpwd">Confrim Password:</label>
					<input type="password" class="form-control" id="cpwd" name="cpass" placeholder="Confrim Password">
					  <span id='message'></span>
				  </div>
				  <button type="submit" onsubmit="Validate()" class="btn btn-primary">Change Password</button>
				</form>
			</div>
			</div>
			<div class="col-md-6">
			<div class="borders">
				<form action="update_email.php" autocomplete="off" method="post">
				  <h2>Change Email Address</h2>
				  <div class="form-group">
					<label for="pemail">New Email:</label>
					<input type="email" class="form-control" id="pemail" name="nemail" placeholder="New Email">
				  </div>
				  <div class="form-group">
					<label for="cemail">Confrim Email:</label>
					<input type="email" class="form-control" id="cemail" name="cemail" placeholder="Confrim Email">
				  </div>
				  <button type="submit" class="btn btn-primary">Change Email</button>
				</form>
			</div>
			</div>
			</div>
		</div>
	</div>
</div>

</body>
</html>
<style>
</style>
<script>
	/* $('#cpwd, #pwd').on('change', function () {
		if ($('#pwd').val() == $('#cpwd').val()) {
			$('#message').html('Matching').css('color', 'green');
		} else 
			$('#message').html('Not Matching').css('color', 'red');
			$('#cpwd').val('');
			
		}); */

</script><script src="https://ajax.googleapis.com/ajax/libs/jquery/2.1.1/jquery.min.js"></script>
