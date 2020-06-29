<?php include('functions.php') ?>
<!DOCTYPE html>
<html>
<head>
	<title>WHLRG Admin</title>
	<link rel="stylesheet" type="text/css" href="style.css">
</head>
<body>

	<div class="header1" style="display:none;">
		<h2 >Login</h2>
	</div>
	<br><center><b>White Hart Lane Recreation Ground<br>Admin Section</b></center>
	<form method="post" action="login.php" class="header1">

		<?php echo display_error(); ?>

		<div class="input-group">
			<label>Username</label>
			<input type="text" name="username" >
		</div>
		<div class="input-group">
			<label>Password</label>
			<input type="password" name="password">
		</div>
		<div class="input-group">
			<button type="submit" class="btn" name="login_btn">Login</button>
		</div>
		<p>
			Not yet a member? <!-- <a href="register.php">Sign up</a> -->
		</p>
	</form>


</body>
</html>