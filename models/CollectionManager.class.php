<?php
class CollectionManager
{
	private $dbh;

	public function __construct($dbh)
	{
		$this->dbh = $dbh;
	}

	public function findAll()
	{
		$sql = "SELECT * FROM collection";
		$query = $this->dbh->prepare($sql);
		$query->execute($id);
		$collections = $query->fetchAll(PDO::FETCH_CLASS, 'Collection');
		return $collections;
	}

	public function findById($id)// OBLIGATOIRE
	{
		$sql = "SELECT * FROM collection WHERE id = ?";
		$query = $this->dbh->prepare($sql);
		$query->execute($id);
		$collection = $query->fetchObject('Collection');
		return $collection;
	}
}
?>