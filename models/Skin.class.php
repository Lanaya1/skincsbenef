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

	private $collection;
	private $rarity;
	private $type;
	private $weapon;

	public function __construct($dbh)
	{
		$this->dbh = $dbh;
	}

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
	public function getPriceD() {
		$this->price = money_format('%.2n', $this->price);
		return $this->price;
	}

	public function getCollection() {
		$manager = new CollectionManager($this->dbh);
		$this->collection = $manager->findById($this->id_collection);
		return $this->collection;
	}
	public function getRarity() {
		$manager = new RarityManager($this->dbh);
		$this->rarity = $manager->findById($this->id_rarity);
		return $this->rarity;
	}
	public function getType() {
		$manager = new TypeManager($this->dbh);
		$this->type = $manager->findById($this->id_type);
		return $this->type;
	}
	public function getWeapon() {
		$manager = new WeaponManager($this->dbh);
		$this->weapon = $manager->findById($this->id_weapon);
		return $this->weapon;
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

		public function setCollection(Collection $collection)
	{
		$this->collection = $collection;
	}
		public function setRarity(Rarity $rarity)
	{
		$this->rarity = $rarity;
	}
		public function setType(Type $type)
	{
		$this->type = $type;
	}
		public function setWeapon(Weapon $weapon)
	{
		$this->weapon = $weapon;
	}
}
?>