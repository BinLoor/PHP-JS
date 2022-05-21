<?php
	require_once 'Form.php';
	require_once 'Input.php';
	
	$form = (new Form)->setAttrs(['action' => '', 'method' => 'GET']);
	echo $form->open();
		echo (new Input())->setAttrs(['name'=>'num1', 'value' => '1']);
		echo (new Input())->setAttrs(['name'=>'num2', 'value' => '2']);
		echo (new Input())->setAttrs(['name'=>'num3', 'value' => '3']);
		echo (new Input())->setAttrs(['name'=>'num4', 'value' => '4']);
		echo (new Input())->setAttrs(['name'=>'num5', 'value' => '5']);
		echo (new Input())->setAttrs(['type'=>'submit']);
	echo $form->close();

	if(isset($_GET['num1'])){
	echo $sum = $_GET['num1'] + $_GET['num2'] + $_GET['num3'] + $_GET['num4'] + $_GET['num5'];
	}
?>

	