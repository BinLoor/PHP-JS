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
	
	public function show() {
		echo '<h3> Имя: '.$this->name.'</h3>';
		echo '<h3> Логин: '.$this->login.'</h3>';
	}
}
?>