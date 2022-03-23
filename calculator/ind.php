<?php
	header('Context-Type: text/html; charset=utf-8');	
	$a = $_POST['ch1'];
	$b = $_POST['ch2'];
	$d = $_POST['deist'];
	$c = 0; 
	switch ($d) {
	case '+': $c = $a+$b; break;
	case '-': $c = $a-$b; break;
	case '*': $c = $a*$b; break;
	case '/': $c = $a/$b; break; 
	default: echo 'Неверная операция'; }
	echo $a, ' ', $d, ' ', $b, ' = ', $c;
	echo '<br><a href="index.html">Назад</a>'
?> 
 