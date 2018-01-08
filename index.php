<?php
session_start();
if (!isset($_SESSION['id'])) {
	header("Location: login.php");
}
?>
<!DOCTYPE html>
<html>
  <head>
    <title>dark_Restore</title>
    <link rel="stylesheet" type="text/css" href="css/ind.css">
  </head>
  <body>
  	<div class="tab">
	  <a href="index.php"><button>Home</button></a>
	  <a href="chat.php"><button>Chat</button></a>
	  <a href="inc/lgt.inc.php"><button style="float: right;">Log Out</button></a>
	  <a href="settngs.php"><button style="float: right;">Settings</button></a>
	</div>
    <h1>welcome_To_The_Site<br>_<?php echo($_SESSION['name']); ?></h1>
  </body>
</html>