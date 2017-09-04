<?php
class Skin
{
	private $id;
	private $idCollection;
	private $idRarity;
	private $idType;
	private $idWeapon;
	private $name;
	private $price;

	public function getId()
	{
		return $this->id;
	}
	public function getIdCollection()
	{
		return $this->idCollection;
	}
	public function getIdRarity()
	{
		return $this->idRarity;
	}
	public function getIdType()
	{
		return $this->idType;
	}
	public function getIdWeapon()
	{
		return $this->idWeapon;
	}
	public function getName()
	{
		return $this->name;
	}
	public function getPrice()
	{
		return $this->Price;
	}


	public function setIdCollection($idCollection)
	{
		$this->idCollection = $idCollection;
	}
	public function setIdRarity($idRarity)
	{
		$this->idRarity = $idRarity;
	}
	public function setIdType($idType)
	{
		$this->idType = $idType;
	}
	public function setIdWeapon($idWeapon)
	{
		$this->idWeapon = $idWeapon;
	}
	public function setName($name)
	{
		$this->name = $name;
	}
	public function setPrice($price)
	{
		$this->price = $price;
	}
}
?>