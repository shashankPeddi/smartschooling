<!doctype html>
<html>
	<head>
		<meta charset="utf-8">
		<title> Login Form</title>
		<link rel="stylesheet" href="style.css">
	</head>
	<style>
body{
background-image:linear-gradient(rgba(0,0,0,0.5),rgba(0,0,0,0.5)), url(background1.jpg);
}
a{
font-color:#fff;
}
</style>
	<body>

		<div class="loginBox">
			<img src="smartschooling.png" class="user">
			<h2>Log In</h2>
			<form action="" method="POST">
				<p>User Name</p>
				<input type="text" name="uname" placeholder="Enter username" required>
				<p>Password</p>
				<input type="password" name="pwd" placeholder="password">
				<input type="submit" name="login" value="Sign In">
				<a href="#">Forget Password</a><br>
                                <a href="register.php">NewUser?</a>
			</form>
		</div>
		<?php
			include_once 'db.php';
			if(isset($_POST["login"])){  
			$uname = $_POST["uname"];  
			$pwd =  $_POST["pwd"];  
			$sql_query = "SELECT `name` FROM `registration` WHERE `name` = '$uname' AND `password` = '$pwd'";  
			$result = mysqli_query($conn,$sql_query);  
			if($row = mysqli_fetch_assoc($result))  
			{  
			$uname =$row["name"];  
			header('Location: homepage.php');  
			}  
			else  
			{   
			echo "<div class=error>Login Failed.......Try Again..</div>";  
			}
		}  
 ?>
	</body>
</html>
