<?php
	session_start();
	if(!isset($_SESSION['username'])) {
		header('location: login.php');
	}	
?>

<!DOCTYPE html>
<html>
	<head>
		<meta charset="UTF-8">
		<meta name="viewport" content="width=device-width, initial-scale=1.0">
		<title>SS</title>
	</head> 
<body>
    <h1>Привет, <a href='profile.php'><?php echo $_SESSION['username']; ?></a></h1>
</body>
</html>