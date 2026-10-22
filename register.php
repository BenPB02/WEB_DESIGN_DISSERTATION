<?php
require_once "config.php";

if ($_SERVER["REQUEST_METHOD"] == "POST") {
	$username = trim($_POST["username"]);
	$email = trim($_POST["email"]);
	$password = trim($_POST["password"]);

	// check username
	$sql = "SELECT id FROM user WHERE username = '$username'";
	if ($result = mysqli_query($conn, $sql)) {
		if (mysqli_num_rows($result) == 1) {
			echo "Error: Username already exists";
			exit();
		}
	}
//password hash and salt
	$hashed_password = password_hash($password, PASSWORD_DEFAULT);

	$target_dir = "uploads/";
	$target_file = $target_dir . basename($_FILES["profile_pic"]["name"]);
	$imageFileType = strtolower(pathinfo($target_file,PATHINFO_EXTENSION));
	$uploadOk = 1;
	// Check if image file is a actual image or fake image
	if(isset($_POST["submit"])) {
		$check = getimagesize($_FILES["profile_pic"]["tmp_name"]);
		if($check !== false) {
			$uploadOk = 1;
		} else {
			echo "Error: File is not an image.";
			$uploadOk = 0;
		}
	}
	if ($_FILES["profile_pic"]["size"] > 500000) {
		echo "Error: File is too large.";
		$uploadOk = 0;
	}
	if($imageFileType != "jpg" && $imageFileType != "png" && $imageFileType != "jpeg"
	&& $imageFileType != "gif" ) {
		echo "Error: Only JPG, JPEG, PNG & GIF files are allowed.";
		$uploadOk = 0;
	}
	if ($uploadOk == 0) {
		echo "Error: Your file was not uploaded.";
	} else {
		if (move_uploaded_file($_FILES["profile_pic"]["tmp_name"], $target_file)) {
			echo "Your file has been uploaded.";
		} else {
			echo "Error: There was an error uploading your file.";
		}
	}

	// Insert new user table
	$sql = "INSERT INTO user (username, email, password, profile_pic) VALUES ('$username', '$email', '$hashed_password', '$target_file')";
	if (mysqli_query($conn, $sql)) {
		header("location: index.php");
		exit();
	} else {
		echo "Error: Could not execute $sql. " . mysqli_error($conn);
	}
}

mysqli_close($conn);
?>
