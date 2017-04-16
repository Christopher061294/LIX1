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
				<a class = "navbar-brand" href= "index.php">LIX1 FYP</a>
				<button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#myNavbar">
					<span class="icon-bar"></span>
					<span class="icon-bar"></span>
					<span class="icon-bar"></span>
					<span class="icon-bar"></span>
				</button>
			</div>
			<div class="collapse navbar-collapse" id="myNavbar">
				<ul class="nav navbar-nav navbar-right">
					<li class="active"><a href="index.php"><span class="glyphicon glyphicon-home"></span> Home</a></li>
					<li><a href="lecture.php"><span class="glyphicon glyphicon-book"></span> Lecture</a></li>
					<li><a href="comment.php"><span class="glyphicon glyphicon-comment"></span> Ask a question</a></li>
					<li><a href="signup.php">Signup</a></li>
					<li>
					<?php
						if (isset($_SESSION['id'])) {
							echo "<form class='navbar-form' action='includes/logout.inc.php'>
							<button>Log out</button>
							</form>";
							echo "You are now logged in as ";
							echo $_SESSION['uid'];
							echo " where id = ";
							echo $_SESSION['id'];



						}
						else {

							echo "<form class='navbar-form' action='includes/login.inc.php' method='POST'>
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

		<section class="main-container">
			<article class="index-intro">
				<div class="container">
					<div class="jumbotron">
						<h1>Welcome to the LIX1</h1>
						<p>a online platform of learning coding that provide beginner-friendly curriculum</p>
					</div>
				</div>
			</article>

		</section>



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



		<nav class="navbar navbar-default navbar-fixed-bottom" >
			<div class="container-fluid">
				<ul class="nav navbar-nav navbar-right">
				<p>LIX1, Copyright &copy; 2017</p>
				<div>Icons made by <a href="http://www.freepik.com" title="Freepik">Freepik</a> from <a href="http://www.flaticon.com" title="Flaticon">www.flaticon.com</a> is licensed by <a href="http://creativecommons.org/licenses/by/3.0/" title="Creative Commons BY 3.0" target="_blank">CC 3.0 BY</a></div>
			</ul>
			</div>
		</nav>

	</body>
</html>
