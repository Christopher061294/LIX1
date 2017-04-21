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
 <td style="text-align: center">Code demo</td>
 </tr>

 <tr>
 <td style="text-align: right">1</td>
 <td style="text-align: left" rowspan="1"><a href="./lecture/Notes_chap1.pptx">Lecture 1: Why we Program</a></td>
 <td style="text-align: left"></td>
 <td style="text-align: left"></td>
 </tr>

 <tr class = "oddrow">
 <td style="text-align: right">2</td>
 <td style="text-align: left" rowspan="1"><a href="./lecture/Notes_chap2.pptx">Lecture 2: C++ Basics</a></td>
 <td style="text-align: left"><button><a href="./lecture/lecture2.avi">Lecture 2 video</button></td>
 <td style="text-align: left"><a href="./lecture/Chap2.zip">demo2</a></td>
 </tr>
 <tr>
 <td style="text-align: right">3</td>
 <td style="text-align: left" rowspan="1"><a href="./lecture/Notes_chap3.pptx">Lecture 3: Control Flows</a></td>
 <td style="text-align: left"><button><a href="./lecture/lecture3.avi">Lecture 3 video</button></td>
 <td style="text-align: left"><a href="./lecture/Chap3.zip">demo3</a></td>
 </tr>

 <tr class = "oddrow">
 <td style="text-align: right">4</td>
 <td style="text-align: left" rowspan="1"><a href="./lecture/Notes_chap4.pptx">Lecture 4: Functions</a></td>
 <td style="text-align: left"><button><a href="./lecture/lecture4.avi">Lecture 4 video</button></td>
 <td style="text-align: left"><a href="./lecture/Chap4.zip">demo4</a></td>
 </tr>

 <tr>
 <td style="text-align: right">5</td>
 <td style="text-align: left" rowspan="1"><a href="./lecture/Notes_chap5.pptx">Lecture 5: Arrays and Structures</a></td>
 <td style="text-align: left"><button><a href="./lecture/lecture5.avi">Lecture 5 video</button></td>
	 <td style="text-align: left"><a href="./lecture/Chap5.zip">demo5</a></td>
 </tr>

 <tr class = "oddrow">
 <td style="text-align: right">6</td>
 <td style="text-align: left" rowspan="1"><a href="./lecture/Notes_chap6.pptx">Lecture 6: Recursion</a></td>
 <td style="text-align: left"><button><a href="./lecture/lecture6.avi">Lecture 6 video</button></td>
	 <td style="text-align: left"><a href="./lecture/Chap6.zip">demo6</a></td>
 </tr>

 </table>



	 <table align="center" id = "lecturetable2">

	<tr id ="practicerow">
		<td style="text-align: left" colspan="2">For practice:</td>

	</tr>
	<tr id = "secondrow2">
		<td style="text-align: left" rowspan="1">Online c++ shell:</td>
		<td style="text-align: left"><a href="http://cpp.sh/">cpp.sh</a></td>
	</tr>
	<tr id = "thirdrow2">
		<td style="text-align: left" rowspan="1">Codechef:</td>
		<td style="text-align: left"><a href="https://www.codechef.com/ide">codechef</a></td>
	</tr>

</table>



  <footer>
    <p>LIX1, Copyright &copy; 2017</p>
    <div>Icons made by <a href="http://www.freepik.com" title="Freepik">Freepik</a> from <a href="http://www.flaticon.com" title="Flaticon">www.flaticon.com</a> is licensed by <a href="http://creativecommons.org/licenses/by/3.0/" title="Creative Commons BY 3.0" target="_blank">CC 3.0 BY</a></div>
  </footer>
</body>
</html>
