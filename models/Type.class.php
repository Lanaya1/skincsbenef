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
		$this->name = rtrim($this->name, 's');
		return $this->name;
	}


	public function setName($name)
	{
		$this->name = $name;
	}
}
?>