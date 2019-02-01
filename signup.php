<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<title>SignUp Form</title>
<link rel="stylesheet" type="text/css" href="signup.css">

</head>
<body>
	<div class="loginbox">
		<h1>Creat Account</h1>
		<form action="includes/signup.inc.php" method="POST">
			<p>First Name</p>
			<input type="text" name="first" placeholder="FirstName">
			<p>Last Name</p>
			<input type="text" name="last" placeholder="LastName">
			<p>E-Mail</p>
			<input type="text" name="email" placeholder="Enter the E-Mail">
			<p>User Name</p>
			<input type="text" name="uid" placeholder="Enter Username">
			<p>Password</p>
			<input type="password" name="pwd" placeholder="Enter Password">
			<button class="Submit" type="submit" name="submit">Signup</button><br>
			<a href="index.php">Already have an account</a>

		</form>
		
	</div>
</body>
</html>