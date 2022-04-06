<?php
class Discipline {
	private $id;
	private $title;
	
	public function __construct($i,$t) {
		$this->id = $i;
		$this->title =$t;
	}
	public function display() {
		echo sprintf('%s<br>', $this->title);
	}
}

?>