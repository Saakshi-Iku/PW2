<?php

if (isset($_POST['login-submit'])) {

	require 'dbh.inc.php';

	$mailuid = $_POST['mailuid'];
	$password = $_POST['pwd'];

	if (empty($mailuid) || empty($password)) {
		header("Location: ../index.php?error=emptyfields");
		exit();
	}
	else {
		$sql = "SELECT * FROM USER_DETAILS WHERE USER_ID=? OR EMAIL=?;";
		$stmt = mysqli_stmt_init($conn);
		if (!mysqli_stmt_prepare($stmt, $sql)) {
			header("Location: ../index.php?error=sqlerror");
			exit();
		}
		else {
			mysqli_stmt_bind_param($stmt, "ss", $mailuid, $mailuid);
			mysqli_stmt_execute($stmt);
			$result = mysqli_stmt_get_result($stmt);
			if ($row = mysqli_fetch_assoc($result)) {
				$pwdcheck = password_verify($password, $row['PASSWORD']);
				if ($pwdcheck == false) {
					header("Location: ../index.php?error=wrongpwd");
					exit();
				}
				else if ($pwdcheck == true) {
					session_start();
					$_SESSION['id'] = $row['ID'];
					$_SESSION['userid'] = $row['USER_ID'];
					$_SESSION['full-name'] = $row['FIRSTNAME'];
					$_SESSION['lastname'] = $row['LASTNAME'];
					$_SESSION['mobile'] = $row['MOBILE_NO'];
					$_SESSION['email'] = $row['EMAIL'];
					$_SESSION['clg'] = $row['COLLEGE'];
					


					header("Location: ../index.php?login=success");
					//exit();
				}
				else {
					header("Location: ../index.php?error=wrongpwd");
					exit();
				}
			}
			else {
				header("Location: ../index.php?error=nouser");
				exit();
			}
		}
	}
}
	else{
		header("Location: ../index.php");
		exit();

}
