<?php
require_once 'duck.php';
require_once 'quack.php';
class MallardDuck extends Duck {
	
	public function __construct() {
		$this->quackBehavior = new Quackk();
	}
	
	public function display() {
		echo 'Я уточка<br>';
	}
}
?>