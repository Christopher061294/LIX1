<?php
session_start();
include '../dbh.php';

$uid = $_POST['uid'];
$pwd = $_POST['pwd'];

$sql = "SELECT * from user where uid='$uid' and pwd='$pwd'";

$result = mysqli_query($conn, $sql);

if(!$row = mysqli_fetch_assoc($result))
{
	echo "Your username or password is incorrect.";
}
else {
	//echo "You are logged in.";
	$_SESSION['id'] = $row['id'];
	$_SESSION['uid'] = $row['uid'];
	
	

}

header("Location: ../index.php");


