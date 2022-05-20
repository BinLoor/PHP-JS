<?php
	class Tag
	{
		private $name;
		
		public function __construct($name)
		{
			$this->name = $name;
		}
		
		public function open()
		{
			$name = $this->name;
			return "<$name>";
		}
		
		public function close()
		{
			$name = $this->name;
			return "</$name>";
		}
	}
?>