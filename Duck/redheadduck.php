<?php
require_once 'duck.php';
require_once 'quack.php';
require_once 'flywithwings.php';
class RedHeadDuck extends Duck {
	
	public function __construct() {
		$this->quackBehavior = new Quackk();
		$this->flyBehavior = new FlyWithWings();
	}
	
	public function display() {
		echo 'Я рыжая утка (Red Head Duck)<br>';
	}
}
?>