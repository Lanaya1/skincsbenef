<?php
class SkinManager
{
	private $dbh;

	public function __construct($dbh)
	{
		$this->dbh = $dbh;
	}

	public function findAll()
	{
		$sql = "SELECT * FROM skin";
		$query = $this->dbh->prepare($sql);
		$query->execute($id);
		$skins = $query->fetchAll(PDO::FETCH_CLASS, 'Skin');
		return $skins;
	}

	public function findById($id)// OBLIGATOIRE
	{
		$sql = "SELECT * FROM skin WHERE id = ?";
		$query = $this->dbh->prepare($sql);
		$query->execute($id);
		$skin = $query->fetchObject('Skin');
		return $skin;
	}

	public function findByCollection(Collection $collection)// OBLIGATOIRE
	{
		$sql = "SELECT * FROM skin WHERE id_collection = ?";
		$query = $this->dbh->prepare($sql);
		$query->execute($collection->getId());
		$skins = $query->fetchAll(PDO::FETCH_CLASS, 'Skin');
		return $skins;
	}

	public function findByType(Type $type)// OBLIGATOIRE
	{
		$sql = "SELECT * FROM skin WHERE id_type = ?";
		$query = $this->dbh->prepare($sql);
		$query->execute($type->getType());
		$skins = $query->fetchAll(PDO::FETCH_CLASS, 'Skin');
		return $skins;
	}

	public function findByType(Weapon $weapon)// OBLIGATOIRE
	{
		$sql = "SELECT * FROM skin WHERE id_weapon = ?";
		$query = $this->dbh->prepare($sql);
		$query->execute($weapon->getId());
		$skins = $query->fetchAll(PDO::FETCH_CLASS, 'Skin');
		return $skins;
	}

	public function findByType(Rarity $rarity)// OBLIGATOIRE
	{
		$sql = "SELECT * FROM skin WHERE id_rarity = ?";
		$query = $this->dbh->prepare($sql);
		$query->execute($rarity->getId());
		$skins = $query->fetchAll(PDO::FETCH_CLASS, 'Skin');
		return $skins;
	}
}
?>