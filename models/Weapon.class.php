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
	public function getId_type()
	{
		return $this->id_type;
	}
	public function getName()
	{
		return $this->name;
	}


	public function setName($name)
	{
		$this->name = $name;
	}
	public function setIdType($id_type)
	{
		$this->id_type = $id_type;
	}
}
?>