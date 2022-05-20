<?php 
require_once 'iFile.php';
require_once 'File.php';
	
	$file = new File('Testiruy.php');

echo $file->getPath().'<br>';
echo $file->getDir().'<br>';
echo $file->getExt().'<br>';
echo $file->getName().'<br>';
echo $file->getSize().' байт'.'<br>';

echo $file->getText();
	
?>