<?php
	session_start();
?>

<!DOCTYPE html>
<html>
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<meta name="description" content="LIX1 FYP">
	<meta name="keywords" content="LIX1 FYP">
	<meta name="author" content="LIX1">


	<title>LIX FYP</title>
	<link rel="stylesheet" type="text/css" href="style.css">

	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous">

	<!-- Optional theme -->
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap-theme.min.css" integrity="sha384-rHyoN1iRsVXV4nD0JutlnGaslCJuC7uwjduW9SVrLvRYooPp2bWYgmgJQIXwl/Sp" crossorigin="anonymous">

	<!-- Jquery -->
	<script
	  src="https://code.jquery.com/jquery-3.2.1.min.js"
	  integrity="sha256-hwg4gsxgFZhOsEEamdOYGBf13FyQuiTwlAQgxVSNgt4="
	  crossorigin="anonymous"></script>
	<!-- Latest compiled and minified JavaScript -->
	<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js" integrity="sha384-Tc5IQib027qvyjSMfHjOMaLkfuWVxZxUPnCJA7l2mCWNIpG9mGCD8wGNIcPD7Txa" crossorigin="anonymous"></script>


</head>

<body>

	<nav class = "navbar navbar-default navbar-fixed-top">
		<div class = "container-fluid">
			<div class = "navbar-header">
				<a class = "navbar-brand" href= "index2.php">LIX1 FYP</a>
				<button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#myNavbar">
					<span class="icon-bar"></span>
					<span class="icon-bar"></span>
					<span class="icon-bar"></span>
					<span class="icon-bar"></span>
				</button>
			</div>
			<div class="collapse navbar-collapse" id="myNavbar">
				<ul class="nav navbar-nav navbar-right">
					<li class="active"><a href="index2.php"><span class="glyphicon glyphicon-home"></span> Home</a></li>
					<li><a href="lecture2.php"><span class="glyphicon glyphicon-book"></span> Lecture</a></li>
					<li><a href="comment2.php"><span class="glyphicon glyphicon-comment"></span> Ask a question</a></li>
					<li><a href="signup2.php">Signup</a></li>
					<li>
					<?php
						if (isset($_SESSION['id'])) {
							echo "<form class='navbar-form' action='includes/logout.inc2.php'>
							<button>Log out</button>
							</form>";
							echo "You are now logged in as ";
							echo $_SESSION['uid'];
							echo " where id = ";
							echo $_SESSION['id'];



						}
						else {

							echo "<form class='navbar-form' action='includes/login.inc2.php' method='POST'>
							<div class='form-group'>
								<input class='form-control' type='text' name='uid' placeholder='Username'>
								<input class='form-control' type='password' name='pwd' placeholder='Password'>
							</div>
							<button type='Submit' class='btn btn-default'>Log in</button>
							</form>";
							echo "You are not logged in.";
						}
					?>
				</li>
		</div>
			</ul>
		</div>
	</nav>





	</header>


<?php


	if (isset($_SESSION['id'])) {
		echo "<p class='pCenter'>You are already logged in.</p>";
	}
	else {
		echo "<div class='container' id= 'signupform'>
			<img src='img/men.png' id= 'men'>
			<form action='includes/signup.inc2.php' method='POST' >
			<div class='form-input' id='input1'><input type='text' name='first' placeholder='Firstname'></div>
			<div class='form-input' id='input2'><input type='text' name='last' placeholder='Lastname'></div>
			<div class='form-input' id='input3'><input type='text' name='uid' placeholder='Username'></div>
			<div class='form-input' id='pwd'><input type='password' name='pwd' placeholder='Password'></div>
			<button type='Submit'>Sign up</button>
		</form></div>";
	}
		$url = "http://".$_SERVER['HTTP_HOST'].$_SERVER['REQUEST_URI'];
		if (strpos($url, 'error=empty') !== false){
			echo "<div class='container2' id='problem'>Fill out all fields</div>";

		}

		elseif (strpos($url, 'error=username') !== false){
			echo "<div class='container2' id='problem'>Username already exists</div>";

		}
?>





		<div class="container-fluid">
				<ul class="nav navbar-nav navbar-right">
				<p>LIX1, Copyright &copy; 2017</p>
				<div>Icons made by <a href="http://www.freepik.com" title="Freepik">Freepik</a> from <a href="http://www.flaticon.com" title="Flaticon">www.flaticon.com</a> is licensed by <a href="http://creativecommons.org/licenses/by/3.0/" title="Creative Commons BY 3.0" target="_blank">CC 3.0 BY</a></div>
			</ul>
			</div>
	</body>
</html>
