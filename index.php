<?php include('server.php'); 

if (empty($_SESSION['username'])) {

header('location : login.php');

}

?>


<!DOCTYPE html>
<html>
<head>
	<title>user registration using php and mysql</title>
</head>
<body>
	<div class ="header">
	<h1>home page</h1>
	</div>

	<div class="content">
		
		<?php if (isset($_SESSION['success'])): ?>
			<div class="error success">
				<h3>
					<?php 
					echo $_SESSION['success'];
					unset($_SESSION['success']);

					 ?>
				</h3>

			</div>
			
		<?php endif ?>
		<?php if (isset($_SESSION["username"])): ?>
			<p>welcome <strong> <?php  echo $_SESSION['username'];?></strong></p>

			<p><a href="index.php?logout='1'">logout</a></p>
			
		<?php endif ?>





	</div>

</body>
</html>
