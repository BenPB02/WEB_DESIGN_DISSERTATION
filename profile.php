<?php
session_start();
require_once "config.php";

// Check if user is logged in
if(!isset($_SESSION["loggedin"]) || $_SESSION["loggedin"] !== true){
    header("location: index.php.php");
    exit;
}

// collect user infomation 
$user_id = $_SESSION["id"];
$sql = "SELECT * FROM user WHERE id = $user_id";
$result = mysqli_query($conn, $sql);
$user = mysqli_fetch_assoc($result);

mysqli_close($conn);
?>
        

<?php include 'head.php'?>

<body>
	
<link rel="stylesheet" href="css_login/profile.css">
<div class="container-fluid">
    <div class="container" id="profile">
        <h2>Welcome, <?php echo $user["username"]; ?>!</h2>
        <div class="profile">
            <img src="<?php echo $user["profile_pic"]; ?>" alt="Profile Picture" class="img-reponsive">
            <p><strong>Username:</strong> <?php echo $user["username"]; ?></p>
            <p><strong>Email:</strong> <?php echo $user["email"]; ?></p>
        </div>
        <a href="logout.php" class="btn btn-primary">Log Out</a>
    </div>
</div>

    <?php include 'foot.php'?>	