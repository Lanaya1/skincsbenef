<?php
class Type
{
	private $id;
	private $name;

	public function getId()
	{
		return $this->id;
	}
	public function getName()
	{
		return $this->name;
	}
	public function getNameS() {
		return rtrim($this->name, 's');
	}


	public function setName($name)
	{
		$this->name = $name;
	}
}
?>