<?php
abstract class Duck {
	protected $quackBehavior;
	
	public function swim() {
		echo 'Буль-буль, утка плавает<br>';
	}
	
	abstract public function display();
	
	public function performQuack() {
		$this->quackBehavior->quack();
	}
} 
?>