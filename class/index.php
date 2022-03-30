<?php 
header('Content-Type: text/html; charset=utf-8');
class User {
	public $name;
	public $login;
	private $pass;
	public function show() {
		echo '<h3> Имя: '.$this->name.'</h3>';
		echo '<h3> Логин: '.$this->login.'</h3>';
	}
}
$user = new User();
$user->name = 'Michael';
$user->login = 'admin';
$user->show();
?>