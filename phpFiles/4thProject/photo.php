<?php
	session_start();
	include_once 'dbh.php';
?>
<!DOCTYPE html>
<html>
<head>
	<title></title>
</head>
<body>

	<?php
		
		if (isset($_SESSION['id'])) {
			if ($_SESSION['id'] == 1) {
				echo "You are logged in as user #1";
			}
			echo '<form action="upload.php" method = "POST" enctype="multipart/form-data" >
		<input type="file" name = "file">
		<button type ="submit" name="submit">UPLOAD</button>
	</form>';
	} 
	else {
		echo "You are not logged in!";
	}
?>
	

<p> Login as user!</p>
<form action="login1.php" method="POST">
		<button type="submit" name="submitlogin">Login</button>
</form>
<p> Logout as user!</p>
<form action="logout.php" method="POST">
		<button type="submit" name="submitlogout">Logout</button>
</form>
</body>
</html>