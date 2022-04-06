<?php
require_once 'human.php';

class Student extends Human {
	private $group;
	
	public function __construct($n,$s,$p,$g) {
		parent::__construct($n,$s,$p);
		$this->group = $g;
		$this->group->AddStudent($this);
	}
	public function display() {
		parent::display();
		echo sprintf('%s<br>', $this->group->GetTitle());
	}
}
?>