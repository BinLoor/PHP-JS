<?php
	class Pswrd extends Input
	{
		public function __construct()
		{
			$this->setAttr('type', 'password');
			parent::__construct();
		}
	}
?>