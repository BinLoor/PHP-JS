<?php
	require_once 'tag.php';
	class Image extends Tag 
	{
		public function __construct()
		{
			$this->setAttr('src', '')->setAttr('alt', '');
			parent::__construct('img');
		}
	}
?>