<?php
	header('Context-Type: text/html; charset=utf-8');	
	$a = $_POST['vvodcel']; 
	$r = $a * (9/5) + 32; 
	echo $r;
?>