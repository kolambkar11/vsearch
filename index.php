<!DOCTYPE html>
<html lang="en">
<head>
  <title>Login</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="css/bootstrap.min.css">
  <script src="js/jquery.min.js"></script>
  <script src="js/popper.min.js"></script>
  <script src="js/bootstrap.min.js"></script>
</head>
<body>

<?php 
$page="Login";
include "nav.php"; ?>
<br>

<div class="container">
	<div class="row">
		<div class="col-md-4"></div>
		<div class="col-md-4">
			<form action="login.php" autocomplete="off" method="post">
			  <div class="form-group">
				<label for="email">Email address:</label>
				<input type="email" class="form-control" id="email" name="email">
			  </div>
			  <div class="form-group">
				<label for="pwd">Password:</label>
				<input type="password" class="form-control" id="pwd" name="password">
			  </div>
			  <button type="submit" class="btn btn-primary">Login</button>
			</form>
		</div>
		<div class="col-md-4"></div>
	</div>
</div>

</body>
</html>


