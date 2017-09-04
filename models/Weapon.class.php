<?php
class Collection
{
	private $id;
	private $idType;
	private $name;

	public function getId()
	{
		return $this->id;
	}
	public function getIdType()
	{
		return $this->idType;
	}
	public function getName()
	{
		return $this->name;
	}


	public function setName($name)
	{
		$this->name = $name;
	}
	public function setIdType($idType)
	{
		$this->idType = $idType;
	}
}
?>