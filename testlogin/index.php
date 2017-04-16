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



</head>


<body>


	<header>
		<div class="container">
			<div id="branding">
				<h1><span class="highlight">LIX1</span> FYP</h1>
			</div>
			<nav>
				<ul>
					<li class="current"><a href="index.php">Home</a></li>
					<li><a href="lecture.php">Lecture</a></li>
					<li><a href="comment.php">Ask a question</a></li>
					<li><a href="signup.php">Signup</a></li>
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





		<section id="showcase">
			<div class="container">
				<h1>Welcome to the LIX1</h1>
				<p>a online platform of learning coding that provide beginner-friendly curriculum</p>
			</div>
		</section>

<!--
		<section id="newsletter">
			<div class="container">
				<h1>Welcome to </h1>
				<form>
					<button type="submit" class="button_1">Signup</button>
				</form>
			</div>
		</section>
	-->

		<section id="boxes">
			<div class="container">
				<div class="box">
					<img src="./img/indexlog1.png">
					<h3>What is self-paced online coding platform?</h3>
					<p>self-paced online coding platform allow people to learn coding whenever and wherever they are free on condition that Internet connection is able.</p>
				</div>
				<div class="box">
					<img src="./img/indexlog2.png">
					<h3>Why should you choose this platform?</h3>
					<p>We can develop a more suitable curriculum for beginner.</p>
				</div>
				<div class="box">
					<img src="./img/indexlog3.png">
					<h3>Our objective</h3>
					<p>The goal of this project is to setup a online learning platform which teaching C++ and aim to bridge the gap between  beginner and existing learning platform. </p>
				</div>
			</div>

		</section>





		<footer>
			<p>LIX1, Copyright &copy; 2017</p>
			<div>Icons made by <a href="http://www.freepik.com" title="Freepik">Freepik</a> from <a href="http://www.flaticon.com" title="Flaticon">www.flaticon.com</a> is licensed by <a href="http://creativecommons.org/licenses/by/3.0/" title="Creative Commons BY 3.0" target="_blank">CC 3.0 BY</a></div>
		</footer>

	</body>
</html>
