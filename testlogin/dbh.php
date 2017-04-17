<?php

$conn = mysqli_connect("localhost", "root", "", "lix1_database");

if (!$conn) {
	die("Connection failed: ".mysqli_connect_error());
}
