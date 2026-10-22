<?php
session_start();
require_once "config.php";

if ($_SERVER["REQUEST_METHOD"] == "POST") {
	$username = trim($_POST["username"]);
	$password = trim($_POST["password"]);

	// Prepare a select statement
	$sql = "SELECT id, username, password FROM user WHERE username = '$username'";

	if ($result = mysqli_query($conn, $sql)) {
		// Check if username exists, if yes then verify password
		if (mysqli_num_rows($result) == 1) {
			// Bind result variables
			$row = mysqli_fetch_array($result);
			$id = $row['id'];
			$username = $row['username'];
			$hashed_password = $row['password'];

			if (password_verify($password, $hashed_password)) {
				// Password is correct, so start a session
            session_start();
            // Store data in session variables
			$_SESSION["loggedin"] = true;
			$_SESSION["id"] = $id;
			$_SESSION["username"] = $username;

			// Redirect user to homepage
			header("location: Home.php");
		} else {
			// Password is not valid, display a generic error message
			$login_err = "Invalid username or password.";
            header("location: index.php");
		}
	} else {
		// Username doesn't exist, display a generic error message
		$login_err = "Invalid username or password.";
        header("location: index.php");
	}
	// Free result set
	mysqli_free_result($result);
}

}

// Close connection
mysqli_close($conn);

?>