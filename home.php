<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	
	<title>Responcive web page</title>
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
				<a href=""><img class="logo" src="logo.png"></a>
			</div>
			<div class="collapse navbar-collapse" id="micon">
			<ul class="nav navbar-nav navbar-right">
				<li><a href="">Home</a></li>
				<li><a href="">Sign Up</a></li>
				<li><a href="">Sign IN</a></li>
				<form action="includes/login.inc.php" method="POST">
							<input type="text" name="uid" placeholder="Username/e-email">
							<input type="password" name="pwd" placeholder="password">
							<button type="submit" name="submit">Login</button>
						  </form>
						<a href="signup.php">Sign up</a>
			</ul>
		</div>
	</nav>
		<div class="container">
			<div class="row">
				
					<h1>Welcome to the Community:</h1>
					<p class="Text">This system is build only for Those... Who really concern about their privacy</p> 

					<a href="#" class="btn btn-first ">Sign Up</a>
					<a href="#" class="btn btn-second ">Sign in</a>
				
				
			</div>
		</div>
	</header>
</body>
</html>