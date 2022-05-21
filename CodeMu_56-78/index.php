<?php
	require_once 'HtmlList.php';
	require_once 'ClassUL.php';
	require_once 'ClassOl.php';
	$ul = new Ul; // сделаем список ul
	$ol = new Ol; // сделаем список ol
			
	echo $ol
		->addItem((new ListItem())->setText('item1'))
		->addItem((new ListItem())->setText('item2'))
		->addItem((new ListItem())->setText('item3'))
		->show(); 
	
	echo '<br>';
	echo $ul
		->addItem((new ListItem())->setText('item1'))
		->addItem((new ListItem())->setText('item2'))
		->addItem((new ListItem())->setText('item3'))
		->show(); 
	
?>