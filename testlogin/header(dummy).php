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
							echo <li>"You are not logged in."</li>;
						}
					?>
				</li>


				</ul>
			</nav>

		</div>


		<!--
		<nav>
			<ul>

				<li><a href="index.php">Home</a></li>



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
						echo "You are not logged in.";
						echo "<form action='includes/login.inc.php' method='POST'>
						<input type='text' name='uid' placeholder='Username'>
						<input type='password' name='pwd' placeholder='Password'>
						<button type='Submit'>Log in</button>
						</form>";
					}

				?>
				<li><a href="signup.php">Signup</a></li>
			</ul>
		</nav>
		-->

	</header>
