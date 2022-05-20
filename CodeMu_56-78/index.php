<?php 
require_once 'tag.php';
	
	$img = new Tag('img');
	echo $img->open().''.$img->close(); 
	
	$header = new Tag('header');
	echo $header->open().'header сайта'.$header->close();
?>