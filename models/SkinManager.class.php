<?php
class RarityManager
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

	public function findByCollection($id_collection)// OBLIGATOIRE
	{
		$sql = "SELECT * FROM skin WHERE id_collection = ?";
		$query = $this->dbh->prepare($sql);
		$query->execute($id_collection);
		$skins = $query->fetchAll(PDO::FETCH_CLASS, 'Skin');
		return $skins;
	}

	public function findByType($id_type)// OBLIGATOIRE
	{
		$sql = "SELECT * FROM skin WHERE id_type = ?";
		$query = $this->dbh->prepare($sql);
		$query->execute($id_type);
		$skins = $query->fetchAll(PDO::FETCH_CLASS, 'Skin');
		return $skins;
	}

	public function findByType($id_weapon)// OBLIGATOIRE
	{
		$sql = "SELECT * FROM skin WHERE id_weapon = ?";
		$query = $this->dbh->prepare($sql);
		$query->execute($id_weapon);
		$skins = $query->fetchAll(PDO::FETCH_CLASS, 'Skin');
		return $skins;
	}

	public function findByType($id_rarity)// OBLIGATOIRE
	{
		$sql = "SELECT * FROM skin WHERE id_rarity = ?";
		$query = $this->dbh->prepare($sql);
		$query->execute($id_rarity);
		$skins = $query->fetchAll(PDO::FETCH_CLASS, 'Skin');
		return $skins;
	}
}
?>