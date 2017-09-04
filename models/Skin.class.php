<?php
class Skin
{
	private $id;
	private $id_collection;
	private $id_rarity;
	private $id_type;
	private $id_weapon;
	private $name;
	private $price;

	public function getId()
	{
		return $this->id;
	}
	public function getIdCollection()
	{
		return $this->id_collection;
	}
	public function getIdRarity()
	{
		return $this->id_rarity;
	}
	public function getIdType()
	{
		return $this->id_type;
	}
	public function getIdWeapon()
	{
		return $this->id_weapon;
	}
	public function getName()
	{
		return $this->name;
	}
	public function getPrice()
	{
		return $this->price;
	}


	public function setIdCollection($id_collection)
	{
		$this->id_collection = $id_collection;
	}
	public function setIdRarity($id_rarity)
	{
		$this->id_rarity = $id_rarity;
	}
	public function setIdType($id_type)
	{
		$this->id_type = $id_type;
	}
	public function setIdWeapon($id_weapon)
	{
		$this->id_weapon = $id_weapon;
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