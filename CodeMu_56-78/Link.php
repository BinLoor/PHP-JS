<?php
require_once 'Tag.php';
	class Link extends Tag
	{
	const activeName = 'active';
		public function __construct()
		{
			parent::__construct('a');
			$this->setAttr('href', '');
		}
		
		public function __toString()
		{
			return parent::show();
		}
		
		public function open()
		{
			$this->activateSelf(); 
			return parent::open();  
		}
		
		private function activateSelf()
		{
			if ($this->getAttr('href') == $_SERVER['REQUEST_URI']) {
				$this->addClass(self::activeName);
			}
		}
		
	}
?>