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
		$sql = "SELECT * FROM collection ORDER BY id DESC";
		$query = $this->dbh->prepare($sql);
		$query->execute();
		$collections = $query->fetchAll(PDO::FETCH_CLASS, 'Collection');
		return $collections;
	}

	public function findById($id)
	{
		$sql = "SELECT * FROM collection WHERE id = ?";
		$query = $this->dbh->prepare($sql);
		$query->execute([$id]);
		$collection = $query->fetchObject('Collection');
		return $collection;
	}

	public function findLastCollection() {
		$sql = "SELECT MAX(id) AS id, name FROM collection";
		$query = $this->dbh->prepare($sql);
		$query->execute();
		$collection = $query->fetchObject('Collection');
		return $collection;
	}
}
?>