<?php
	header('Context-Type: text/html; charset=utf-8');	
	$a = $_POST['vvod']; 
	$fact = 1; 
	for ($i = 1; $i <= $a; $i++)
	{$fact *= $i;}
	echo $fact;
?>