<?php
session_start();
if (!isset($_SESSION['id'])) {
	header("Location: login.php");
}
?>
<!DOCTYPE html>
<html>
<head>
	<title>chat</title>
	<link rel="stylesheet" type="text/css" href="css//cht.css">
	<script type="text/javascript" src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.0/jquery.min.js"></script>
	<script type="text/javascript">
		 $(document).ready(function(){
		 	window.setInterval(function(){
		 		$("#messages").load("inc/chi.inc.php");
		 	}, 500);
		 });
	</script>
</head>
<body>
  	<div class="tab">
	  <a href="index.php"><button>Home</button></a>
	  <a href="chat.php"><button>Chat</button></a>
	  <a href="inc/lgt.inc.php"><button style="float: right;">Log Out</button></a>
	  <a href="settngs.php"><button style="float: right;">Settings</button></a>
	</div><br><br>
	<div class="body">
		<div class="right">
			<div class="sidebar">
				
			</div>
		</div>
		<div class="left">
			<div class="messages" id="messages">
				<?php
				echo "<br>";
				include 'inc/db.inc.php';
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
			</div>
			<div class="send">
				<form id="sendmessage" method="POST" action="inc/cho.inc.php">
					<input type="text" name="message" required>
					<button type="submit">SEND</button>
				</form>
			</div>
		</div>
	</div>
</body>
</html>