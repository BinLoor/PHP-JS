<?php
	class Hidden extends Input
	{
		public function __construct()
		{
			$this->setAttr('type', 'hidden');
			parent::__construct();
		}
	}
?>