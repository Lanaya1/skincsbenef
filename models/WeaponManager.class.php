<?php
class WeaponManager
{
	private $dbh;

	public function __construct($dbh)
	{
		$this->dbh = $dbh;
	}

	public function findAll()
	{
		$sql = "SELECT * FROM weapon";
		$query = $this->dbh->prepare($sql);
		$query->execute();
		$weapons = $query->fetchAll(PDO::FETCH_CLASS, 'Weapon');
		return $weapons;
	}

	public function findById($id)
	{
		$sql = "SELECT * FROM weapon WHERE id = ?";
		$query = $this->dbh->prepare($sql);
		$query->execute([$id]);
		$weapons = $query->fetchObject('Weapon');
		return $weapons;
	}

	public function findByType(Type $type) {
		$sql = "SELECT * FROM weapon WHERE id_type = ?";
		$query = $this->dbh->prepare($sql);
		$query->execute([$type->getId()]);
		$weapons = $query->fetchAll(PDO::FETCH_CLASS, 'Weapon');
		return $weapons;
	}
}
?>