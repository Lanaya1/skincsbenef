<?php
class TypeManager
{
	private $dbh;

	public function __construct($dbh)
	{
		$this->dbh = $dbh;
	}

	public function findAll()
	{
		$sql = "SELECT * FROM type";
		$query = $this->dbh->prepare($sql);
		$query->execute($id);
		$types = $query->fetchAll(PDO::FETCH_CLASS, 'Type');
		return $types;
	}

	public function findById($id)// OBLIGATOIRE
	{
		$sql = "SELECT * FROM type WHERE id = ?";
		$query = $this->dbh->prepare($sql);
		$query->execute($id);
		$type = $query->fetchObject('Type');
		return $type;
	}
}
?>