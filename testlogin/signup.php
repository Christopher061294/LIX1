<?php
	session_start();
?>

<!DOCTYPE html>
<html>
<head>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width">
<meta name="description" content="LIX1 FYP">
<meta name="keywords" content="LIX1 FYP">
<meta name="author" content="LIX1">


<title>LIX FYP</title>
<link rel="stylesheet" type="text/css" href="style.css">
<link rel="stylesheet" type="text/css" href="css/font-awesome.css">
</head>


<body>

	<header>
		<div class="container">
			<div id="branding">
				<h1><span class="highlight">LIX1</span> FYP</h1>
			</div>
			<nav>
				<ul>
					<li><a href="index.php">Home</a></li>
					<li><a href="lecture.php">Lecture</a></li>
					<li><a href="comment.php">Ask a question</a></li>
					<li class="current"><a href="signup.php">Signup</a></li>
					<li>
					<?php
						if (isset($_SESSION['id'])) {
							echo "<form action='includes/logout.inc.php'>
							<button>Log out</button>
							</form>";
							echo "You are now logged in as ";
							echo $_SESSION['uid'];
							echo " where id = ";
							echo $_SESSION['id'];



						}
						else {

							echo "<form action='includes/login.inc.php' method='POST'>
							<input type='text' name='uid' placeholder='Username'>
							<input type='password' name='pwd' placeholder='Password'>
							<button type='Submit'>Log in</button>
							</form>";
							echo "You are not logged in.";
						}
					?>
				</li>


				</ul>
			</nav>

		</div>




	</header>




<?php


	if (isset($_SESSION['id'])) {
		echo "<p class='pCenter'>You are already logged in.</p>";
	}
	else {
		echo "<div class='container' id= 'signupform'>
			<img src='img/men.png' id= 'men'>
			<form action='includes/signup.inc.php' method='POST' >
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





		<footer>
			<p>LIX1, Copyright &copy; 2017</p>
			<div>Icons made by <a href="http://www.freepik.com" title="Freepik">Freepik</a> from <a href="http://www.flaticon.com" title="Flaticon">www.flaticon.com</a> is licensed by <a href="http://creativecommons.org/licenses/by/3.0/" title="Creative Commons BY 3.0" target="_blank">CC 3.0 BY</a></div>
		</footer>
	</body>
</html>
