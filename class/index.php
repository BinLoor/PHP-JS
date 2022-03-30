<?php 
header('Content-Type: text/html; charset=utf-8');
session_start();
if (!isset($_SESSION['authorized'])) {
	header('location: login.php');
}
require_once 'user.php';

$user = new User();
$user->LoadFromSession();
$user->show();
?>