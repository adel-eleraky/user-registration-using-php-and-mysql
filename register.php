<?php include('server.php'); ?>


<!DOCTYPE html>
<html>
<head>
	<title>user registration using php and mysql</title>
</head>
<body>
	<div class ="header">
	<h1>Register</h1>
	</div>

	<form method ="post" action ="register.php">

		<?php include('errors.php'); ?>
		<div class ="input-group">
			<label>username</label>
			<input type="text" name="username">
		</div>
		<div class ="input-group">
			<label>email</label>
			<input type="text" name="email">
		</div>
		<div class ="input-group">
			<label>password</label>
			<input type="text" name="password_1">
		</div>
		<div class ="input-group">
			<label>confirm password</label>
			<input type="password" name="password_2">
		</div>
		<div class ="input-group">
			<button type ="submit" name ="register" class ="btn">Register</button>
			<p>already a member <a href="login.php">sign in</a></p>
		</div>

	</form>

</body>
</html>
