<?php 
require_once 'tag.php';
	
	$tag = new Tag('input');
	echo $tag
		->setAttr('id', 'test')
		->setAttr('disabled', true)
		->open(); // выведет <input id="test" disabled>
?>