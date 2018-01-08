<?php
session_start();
if (!isset($_SESSION['id'])) {
	header("Location: login.php");
}
?>
<!DOCTYPE html>
<html>
	<head>
		<title>Settings</title>
		<link rel="stylesheet" type="text/css" href="css/set.css">
		<script type="text/javascript" src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.0/jquery.min.js"></script>
		<script type="text/javascript">
			var x = <?php 	echo $_SESSION['power'];	?>
			if (x = 3) {
				$("#body").load("chat.php");
			} else if ( x = 2) {
				$("#body").load("index.php");
			} else {
				$("#body").load("inc/chi.inc.php");
			}
		</script>
	</head>
	<body>
	  	<div class="tab">
		  <a href="index.php"><button>Home</button></a>
		  <a href="chat.php"><button>Chat</button></a>
		  <a href="inc/lgt.inc.php"><button style="float: right;">Log Out</button></a>
		  <a href="settngs.php"><button style="float: right;">Settings</button></a>
		</div>
		<div id="body">
			
		</div>
	</body>
</html>