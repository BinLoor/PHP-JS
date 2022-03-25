<?php
	session_start();
	if(!isset($_SESSION['counter'])) {
		$_SESSION['counter'] = 0; 
	}
	else {
		$_SESSION['counter'] ++ ;
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
    <?php 
	echo $_SESSION['counter']; 
	?>
</body>
</html>