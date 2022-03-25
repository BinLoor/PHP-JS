<?php
	session_start();
	if(!empty($_POST['name'] && !empty($_POST['pass']))) {
		$name = $_POST['name'];
		$pass = $_POST['pass'];
		//авторизация прошла 
		if ($name === 'Michael' && $pass ==='1234') {
		$_SESSION['username'] = $name;
		header('location: ff.php');		
		}
	}
?>

<!DOCTYPE html>
<html>
	<head>
		<meta charset="UTF-8">
		<meta name="viewport" content="width=device-width, initial-scale=1.0">
		<title>Авторизация</title>
		<link rel = 'stylesheet' href='style.css'>
	</head> 
<body>
    <div id = 'content'>
		<form action ='' method = 'post'>
			<h3>Authorizathion</h3>
			<input type='text' name='name' placeholder='Login'><br>
			<input type='text' name='pass' placeholder='Password'><br>
			<input type='submit' name=''>
		</form>
	</div>
</body>
</html>