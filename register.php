
<!doctype html>
<html>
	<head>
		<meta charset="utf-8">
		<title>Registration form</title>
		<link rel="stylesheet" href="style1.css">
		
	</head>
	<body>
	
		<div class="Registration">
		     <h2>Registration</h2>
			<form action="" method="POST">
                                <p>Username</p>
                                <input type="text" name="uname" placeholder="Enter u r username" pattern="[0-9A-Za-z]{5,}"required>
				<p>Email</p>
				<input type="text" name="email" placeholder="Enter Email" pattern="[a-z0-9._%+-]+@[a-z0-9.-]+\.[a-z]{2,4}"required>
				<p>Password</p>
				<input type="password" name="pwd" placeholder="......" pattern="[0-9A-Za-z]{8,}" required>
                                <p>re-enter password</p>
                                 <input type="password" name="cpwd" placeholder="......"  pattern="[0-9A-Za-z]{8,}" required>
                                 <p>mobile number</p>
                                 <input type="text" name="phno" placeholder="xxxxxxxxxx" pattern="[0-9]{10}"required>
				<input type="submit" name="register" value="Register Me">
                                <input type="reset" name="" value="reset">				
		</div>
		<?php 
		include_once 'db.php';
		if(isset($_POST['register'])){
			$name = $_POST['uname'];
			$email = $_POST['email'];
			$pwd = $_POST['pwd'];
			$cpwd = $_POST['cpwd'];
			$phno = $_POST['phno'];
			//echo "$name,$email,$pwd,$cpwd,$phno";

			$sql = "INSERT INTO `registration` (`name`, `email`, `password`, `phno`) VALUES ('$name', '$email', '$pwd', '$phno')";
			if (mysqli_query($conn, $sql)) {
				echo "<script>alert('Registration Sucessful');window.location.href='index.php';</script>";
				//header('location: index.php');
			} 
			else {
				echo "Error: " . $sql . "<br>" . mysqli_error($conn);
			}
		}
	?>
	</body>
</html>
