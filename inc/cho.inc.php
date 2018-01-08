<?php
session_start();
include 'db.inc.php';
$message = $_POST['message'];
$author = $_SESSION['name'];
echo $author;
$sql = "INSERT INTO comments (author, message) VALUES ('$author', '$message')";
$result = mysqli_query($conn, $sql);
header("Location: ../chat.php");	
?>