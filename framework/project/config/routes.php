<?php
	use \Core\Route;
	
	return [
		new Route('/my-page1/', 'page', 'show1'),
		new Route('/my-page2/', 'page', 'show2'),
		new Route('/privet/', 'test', 'act1'),
		new Route('/poka/', 'test', 'act2'),
		new Route('/kak/', 'test', 'act3'),
		new Route('/nums/:n1/:n2/:n3/', 'num', 'sum'),
		new Route('/user/:id/', 'user', 'show'),
		new Route('/user/:id/:key/', 'user', 'info'),
		new Route('/page/act/', 'page', 'act'), 
		new Route('/product/:n/', 'product', 'show'),
		new Route('/product/all/', 'product', 'all'),
	];
?>