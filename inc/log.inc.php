<?php

session_start();
include 'db.inc.php';

$uid = $_POST['uid'];
$pwd = $_POST['pwd'];

$sql = "SELECT * FROM users WHERE uid='$uid' AND pwd='$pwd'";
$result = mysqli_query($conn, $sql);

if (!$row = mysqli_fetch_assoc($result)) {
	header("Location: ../login.php");
} else {
	$_SESSION['id'] = $row['id'];
	$_SESSION['uid'] = $row['uid'];
	$_SESSION['pwd'] = $row['pwd'];
	$_SESSION['name'] = $row['name'];
	$_SESSION['pwr'] = $row['power'];
	header("Location: ../index.php");
}