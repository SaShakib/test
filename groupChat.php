<?php 

	session_start();
?>

<!DOCTYPE html>
 				<html>
 				<head>
					<meta charset="utf-8">
					<title>Group_Chat</title>
					<link rel="stylesheet" href="styles.css">
								
					<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
					<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
					<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
				</head>
								<body>
							

				<?php if (isset($_SESSION['u_id'])) : ?>
										<!DOCTYPE html>
 				<html>
 				<head>
					<meta charset="utf-8">
					<title>Chat system</title>
					<link rel="stylesheet" href="styles.css">
								
					<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
					<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
					<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
				</head>
								<body>
								<header class="<header">
										<nav class="navbar navbar-style">
								<div class="container">


									<div class="navbar-header">
									<button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#micon">
									<span class="icon-bar"> </span>
									<span class="icon-bar"> </span>
									<span class="icon-bar"> </span>
									</button>
									<a href=""><img class="logo" src="logo.jpg"></a>
									</div>
									<div class="collapse navbar-collapse" id="micon">
									<ul class="nav navbar-nav navbar-right">
									<li><a href="">Home</a></li>
									<li><a href="group_chat.php">Group Chat</a></li>
									<li><a href="">Messange</a></li>
									<li>
									<form action="includes/logout.inc.php" method="POST">
									<button class="logout" type="submit" name="submit">Logout</button>
									</form></li>
									</ul>
									</div>
								</div>
								</nav>
								</header>
								</body>
								</html>
							<?php endif ?>


							<?php if (!isset($_SESSION['u_id'])) : ?>
								<!DOCTYPE html>
								<html>
								<head>
								<title>Transperant Login Page</title>
								<link rel="stylesheet" type="text/css" href="sign_up.css">
								</head>
								<body>
								<div class="loginbox">
								<form action="includes/login.inc.php" method="POST">
								<div>
								<h1>Sign In</h1>
								</div>

								<div class="textbox">
								<p>User Name</p>
								<input type="text" name="uid" placeholder="Enter Username">
								</div>
	

								<div class="textbox">		
								<p>Password</p>
								<input type="password" name="pwd" placeholder="Enter Password">
								</div>
								<button class="Submit" type="submit" name="submit">Sign In</button>

								</form>
								<a href="signup.php">Creat an Account</a>
							<?php endif ?>
								</body>
								</html>



								