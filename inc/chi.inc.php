<?php
session_start();
if (!isset($_SESSION['id'])) {
	header("Location: login.php");
}
?>
<?php
echo "<br>";
include 'db.inc.php';
$sql = "SELECT * FROM comments ORDER BY id DESC";
if ($result = mysqli_query($conn,$sql)) {
	while ($row = mysqli_fetch_row($result)) {
		if ($row['1']==$_SESSION['name']) {
			$message =  '<div class="messags"><b> UID | '.$row['1'].": <br>".$row['2']."<br>".$row['3']."</div><br></b>";
		} else {
			$message =  '<div class="messag"><b> UID | '.$row['1'].": <br>".$row['2']."<br>".$row['3']."</div><br></b>";
		}
		echo $message;
	}
	mysqli_free_result($result);
} else {
	echo 'Error';
}
mysqli_close($link);
?>