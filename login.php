<?php include('server.php'); ?>


<!DOCTYPE html>
<html>
<head>
	<title>user registration using php and mysql</title>
</head>
<body>
	<div class ="header">
	<h1>login</h1>
	</div>

	<form method ="post" action ="login.php">

		<?php include('errors.php'); ?>
		<div class ="input-group">
			<label>username</label>
			<input type="text" name="username">
		</div>
		
		<div class ="input-group">
			<label>password</label>
			<input type="text" name="password">
		</div>
		
		<div class ="input-group">
			<button type ="submit" name ="login" class ="btn">login</button>
			<p>not yet a member <a href="register.php">sign up</a></p>
		</div>

	</form>

</body>
</html>
