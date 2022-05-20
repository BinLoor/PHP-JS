<?php
	class Tag
	{
		private $name;
		private $attrs = [];
		
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
		private function getAttrsStr($attrs)
	{
		if (!empty($attrs)) {
			$result = '';
			
			foreach ($attrs as $name => $value) {
				$result .= " $name=\"$value\"";
			}
			
			return $result;
		} else {
			return '';
		}
	} 
	public function setAttr($name, $value)
		{
			$this->attrs[$name] = $value;
			return $this; 
		} 
	public function removeAttr($name)
		{
			if(array_key_exists($name, $this->attrs))
			{
			unset($this->attrs[$name]);
			}
		return $this;
		}
	public function setAttrs($attrs)
		{
			foreach ($attrs as $name => $value) {
			$this->setAttr($name, $value);
		}
		return $this;
	}
} 
?>