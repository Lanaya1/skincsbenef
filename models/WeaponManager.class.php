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
		$query->execute($id);
		$weapons = $query->fetchAll(PDO::FETCH_CLASS, 'Weapon');
		return $weapons;
	}

	public function findById($id)// OBLIGATOIRE
	{
		$sql = "SELECT * FROM weapon WHERE id = ?";
		$query = $this->dbh->prepare($sql);
		$query->execute($id);
		$weapon = $query->fetchObject('Weapon');
		return $weapon;
	}
}
?>