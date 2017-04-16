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
					<li class="current"><a href="lecture.php">Lecture</a></li>
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


  <table align="center" id = "lecturetable">

 <tr id = "firstrow">
 <td style="text-align: center">Module</td>
 <td style="text-align: center">Note</td>
 <td style="text-align: center">Video</td>
 </tr>

 <tr>
 <td style="text-align: right">1</td>
 <td style="text-align: left" rowspan="1"><a href="./lecture/m1.pdf">Module 1: Why we Program</a></td>
 <td style="text-align: left"><button><a href="./lecture/m1.mp3">Module 1 video</button></td>
 </tr>

 <tr class = "oddrow">
 <td style="text-align: right">2</td>
 <td style="text-align: left" rowspan="1"><a href="./lecture/m2.pdf">Module 2: C++ Basics</a></td>
 <td style="text-align: left"><button><a href="./lecture/m2.mp3">Module 2 video</button></td>
 </tr>
 <tr>
 <td style="text-align: right">3</td>
 <td style="text-align: left" rowspan="1"><a href="./lecture/m3.pdf">Module 3: Control Flows</a></td>
 <td style="text-align: left"><button><a href="./lecture/m3.mp3">Module 3 video</button></td>
 </tr>

 <tr class = "oddrow">
 <td style="text-align: right">4</td>
 <td style="text-align: left" rowspan="1"><a href="./lecture/m4.pdf">Module 4: Functions</a></td>
 <td style="text-align: left"><button><a href="./lecture/m4.mp3">Module 4 video</button></td>
 </tr>

 <tr>
 <td style="text-align: right">5</td>
 <td style="text-align: left" rowspan="1"><a href="./lecture/m5.pdf">Module 5: Arrays and Structures</a></td>
 <td style="text-align: left"><button><a href="./lecture/m5.mp3">Module 5 video</button></td>
 </tr>

 <tr class = "oddrow">
 <td style="text-align: right">6</td>
 <td style="text-align: left" rowspan="1"><a href="./lecture/m6.pdf">Module 6: Recursion</a></td>
 <td style="text-align: left"><button><a href="./lecture/m6.mp3">Module 6 video</button></td>
 </tr>

 </table>


  <footer>
    <p>LIX1, Copyright &copy; 2017</p>
    <div>Icons made by <a href="http://www.freepik.com" title="Freepik">Freepik</a> from <a href="http://www.flaticon.com" title="Flaticon">www.flaticon.com</a> is licensed by <a href="http://creativecommons.org/licenses/by/3.0/" title="Creative Commons BY 3.0" target="_blank">CC 3.0 BY</a></div>
  </footer>
</body>
</html>
