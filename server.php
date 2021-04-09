<?php 

session_start();


$username ='';
$email = '';
$errors =array();

// connect to database

$db = mysqli_connect('localhost', 'root', '', 'registration');

	if (isset($_POST['register']) ){

		$username = mysql_real_escape_string($_POST['username']);

		$email = mysql_real_escape_string($_POST['email']);
		$password_1 = mysql_real_escape_string($_POST['password_1']);
		$password_2 = mysql_real_escape_string($_POST['password_2']);



		if (empty($username)){
			array_push($errors, 'username is required');
		}
		if (empty($email)){
			array_push($errors, 'email is required');
		}
		if (empty($password_1)){
			array_push($errors, 'password is required');
		}
		if (empty($password_1 != $password_2)){
			array_push($errors, ' the two password do not match  ');
		}

		if (count($errors == 0)) {

			$password = md5($password_1);
			 $sql = "  INSERT INTO users (username ,email,password)  VALUES ('$username'.'$email'.'$password' )";

			 mysql_query($db , $sql);
			 $_SESSION['username']=$username;
			 $_SESSION['success'] = "you are logged in";
			 header('location: index.php');

		}
	}

	if (isset($_POST['login'])) {

		$username = mysql_real_escape_string($_POST['username']);

		$password = mysql_real_escape_string($_POST['password']);



		if (empty($username)){
			array_push($errors, 'username is required');
		}
		if (empty($password)){
			array_push($errors, 'password is required');}

			if (count($errors) == 0){

				$password = md5(password);

				$query = "SELSECT * FROM users WHERE username ='$username' AND password = '$password'";
				$result = mysqli_query($db,$query);

				if (mysql_num_rows($result) == 1) {
					 $_SESSION['username']=$username;
					 $_SESSION['success'] = "you are logged in";
					 header('location: index.php');

				  
				}else {array_push($errors, "wrong usename/password combination")


				}
			}
		
	}

	if (isset($_GET['logout'])) {

	session_destroy();
	unset($_SESSION['username']);
	header('location:login.php');
	}


 ?>
