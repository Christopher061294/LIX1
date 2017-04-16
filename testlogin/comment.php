<?php
	session_start();
?>

<?php
	date_default_timezone_set('Asia/Hong_Kong');
  include 'dbh_comment.php';
  include 'includes/comments.inc.php';

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
					<li><a href="index.php">Home</a></li>
					<li><a href="lecture.php">Lecture</a></li>
          <li class="current"><a href="comment.php">Ask a question</a></li>
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

  <section id ="commentarea1"<h id=asqh>Ask a question</h></section>
  <!--<section id="commentsection">-->
  <section id="commentarea2">
    <?php
		if (isset($_SESSION['id'])){
    echo "<form method='POST' action='".setComments($conn)."'>
      <input type='hidden' name='uid' value='".$_SESSION['id']."'>
      <input type='hidden' name='date' value='".date('Y-m-d H:i:s')."'>
      <textarea name='message' id='commenttextarea'>
      </textarea><br>
      <button type='sumbit' name='commentSumbit' id='commentsumbitbutton'>Comment</button>
    </form>";
		}
		else {
			echo "You need to be logged in to comment! <br><br>";
		}

    getComments($conn);
    ?>
  </section>

    <footer >
      <p>LIX1, Copyright &copy; 2017</p>
      <div>Icons made by <a href="http://www.freepik.com" title="Freepik">Freepik</a> from <a href="http://www.flaticon.com" title="Flaticon">www.flaticon.com</a> is licensed by <a href="http://creativecommons.org/licenses/by/3.0/" title="Creative Commons BY 3.0" target="_blank">CC 3.0 BY</a></div>
    </footer>
  </body>
</html>