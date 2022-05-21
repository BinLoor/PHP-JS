<?php
	require_once 'image.php';
	$img = (new Image())->setAttrs(['src' => 'img.png', 'width' =>'300', 'height'=>'200']);
	echo $img->open();
?>