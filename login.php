<!DOCTYPE html>
<html>
	<head>
		<title>dark_Restore</title>
		<link rel="stylesheet" type="text/css" href="css/log.css">
	</head>
	<body>
		<div class="login">
		  <div class="imgcontainer">
		    <h1>dark_Restore</h1>
		  </div>

		  <form action="inc/log.inc.php" method="POST" id="lform">
		    <div class="container">
		      <label><b>Username</b></label>
		      <input type="text" placeholder="Enter Username" name="uid" required>

		      <label><b>Password</b></label>
		      <input type="password" placeholder="Enter Password" name="pwd" required>
		          
		      <button type="submit" onclick="check()"><b>Login</b></button>
		    </div>
		  </form>
		</div>
	</body>
</html>