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
		$sql = "SELECT * FROM rarity";
		$query = $this->dbh->prepare($sql);
		$query->execute();
		$raritys = $query->fetchAll(PDO::FETCH_CLASS, 'Rarity');
		return $raritys;
	}

	public function findById($id)
	{
		$sql = "SELECT * FROM rarity WHERE id = ?";
		$query = $this->dbh->prepare($sql);
		$query->execute([$id]);
		$rarity = $query->fetchObject('Rarity');
		return $rarity;
	}
}
?>