<?php 
session_start();
header('Content-Type: text/html; charset=utf-8');
class User {
	private $name;
	private $login;
	private $pass;
	
	public function set($n, $l, $p) {
	$this->name = $n;	
	$this->login = $l;
	$this->pass = $p;
	} 
	public function SaveToSession() {
		$_SESSION[user_name] = $this->name;
		$_SESSION[user_login] = $this->login;
		$_SESSION[user_pass] = $this->pass;
	}
	public function LoadFromSession() {
		$this->set($_SESSION['user_name'],$_SESSION['user_login'],$_SESSION['user_pass']);
	}
	
	public function authorize($P) {
		if ($P['login'] === $this->login && $P['pass'] === $this->pass) {
			return true;
		}
		else {
			return false;
		}
	}
	
	public function LoadFromForm($P) {
		if (!empty($P['name']) && !empty($P['login']) && !empty($P['pass'])) {
			$this->set($P['name'], $P['login'], $P['pass']);
		}
	}
	
	public function show() {
		echo '<h3> Имя: '.$this->name.'</h3>';
		echo '<h3> Логин: '.$this->login.'</h3>';
		echo '<a href="logout.php">Выйти</a>'; 
	}
}
?>