<?php
	namespace Project\Controllers;
	use \Core\Controller;
	
	class PageController extends Controller
	{
		public function act()
		{
			return $this->render('page/act', [
				'header' => 'список юзеров',
				'users'  => ['user1', 'user2', 'user3'],
			]);
		}
	}
?>