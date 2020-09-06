<?php
if (isset($_POST['submit'])) {
	$file = $_FILES['file'];

	$filename = $_FILES['file']['name'];
	$filetmpname = $_FILES['file']['tmp_name'];
	$filesize = $_FILES['file']['size'];
	$fileerror = $_FILES['file']['error'];
	$filetype = $_FILES['file']['type'];

	$fileext = explode('.',$filename);
	$fileactualext = strtolower(end($fileext));

	$allowed = array('jpg', 'jpeg', 'png');

	if (in_array($fileactualext, $allowed)) {
		if ($fileerror === 0) {
			if ($filesize < 1000000) {
				$filenamenew = uniqid('', true).".".$fileactualext;
				$filedestination = 'uploads/'.$filenamenew;
				move_uploaded_file($filetmpname, $filedestination );
				header("Location : signup.php?uploadsuccess");

			}
			else {
				echo 'Your file is too big!';
			}

		}
		else {
			echo 'There was an error uploading your file!';
		}

	}
	else {
		echo "You cannot upload files of this type!";
	}
}