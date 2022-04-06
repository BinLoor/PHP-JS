<?php 
class Human {
	private $name;
	private $surname;
	private $patronymic;
	
	public function __construct($n,$s,$p) {
		$this->name = $n;
		$this->surname = $s;
		$this->patronymic = $p;
	}
	public function display() {
		echo sprintf('%s %s %s<br>',$this->name,$this->surname,$this->patronymic);
	}
}
?>