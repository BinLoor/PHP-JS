<?php
require_once 'human.php';
class Teacher extends Human {
	private $disciplines = array();
	
	public function AddDiscipline($d) {
		array_push($this->disciplines, $d);
	}
	public function display() {
		parent::display();
		
		echo '<h2>Список дисциплин</h2>';
		foreach ($this->disciplines as $discipline) {
			$discipline->display();
		}
	}
}
?>