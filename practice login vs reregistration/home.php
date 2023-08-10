<?php
session_start();
if (!isset($_SESSION['username'])) {
	header('location:login.php');
}

?>

<!DOCTYPE html>
<html>
<head>
	<title>Home page</title>
</head>
<body>

	<a href="logout.php">Logout</a>


<h1>Wellcome <?php echo $_SESSION['username'];?> page</h1>
</body>
</html>