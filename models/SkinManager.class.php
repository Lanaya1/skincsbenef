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
		$query->execute();
		$skins = $query->fetchAll(PDO::FETCH_CLASS, 'Skin', [$this->dbh]);
		return $skins;
	}

	public function findById($id)
	{
		$sql = "SELECT * FROM skin WHERE id = ?";
		$query = $this->dbh->prepare($sql);
		$query->execute([$id]);
		$skin = $query->fetchObject('Skin', [$this->dbh]);
		return $skin;
	}

	public function findByCollection(Collection $collection)
	{
		$sql = "SELECT * FROM skin WHERE id_collection = ? ORDER BY id_rarity DESC";
		$query = $this->dbh->prepare($sql);
		$query->execute([$collection->getId()]);
		$skins = $query->fetchAll(PDO::FETCH_CLASS, 'Skin', [$this->dbh]);
		return $skins;
	}

	public function findByType(Type $type)
	{
		$sql = "SELECT * FROM skin WHERE id_type = ? ORDER BY id_rarity DESC";
		$query = $this->dbh->prepare($sql);
		$query->execute([$type->getId()]);
		$skins = $query->fetchAll(PDO::FETCH_CLASS, 'Skin', [$this->dbh]);
		return $skins;
	}

	public function findByWeapon(Weapon $weapon)
	{
		$sql = "SELECT * FROM skin WHERE id_weapon = ? ORDER BY id_rarity DESC";
		$query = $this->dbh->prepare($sql);
		$query->execute([$weapon->getId()]);
		$skins = $query->fetchAll(PDO::FETCH_CLASS, 'Skin', [$this->dbh]);
		return $skins;
	}

	public function findByRarity(Rarity $rarity)
	{
		$sql = "SELECT * FROM skin WHERE id_rarity = ?";
		$query = $this->dbh->prepare($sql);
		$query->execute([$rarity->getId()]);
		$skins = $query->fetchAll(PDO::FETCH_CLASS, 'Skin', [$this->dbh]);
		return $skins;
	}

	public function findByOrder(Order $order)
	{
		$sql = "SELECT skin.* FROM skin
		INNER JOIN link_order_skin AS link ON link.id_skin = skin.id 
		WHERE link.id_order = ?";
		$query = $this->dbh->prepare($sql);
		$query->execute([$order->getId()]);
		$skins = $query->fetchAll(PDO::FETCH_CLASS, 'Skin', [$this->dbh]);
		return $skins;
	}

	public function findQuantityByOrder(Order $order)
	{
		$sql = "SELECT skin.*, COUNT(*) AS quantity FROM skin
		INNER JOIN link_order_skin AS link ON link.id_skin = skin.id 
		WHERE link.id_order = ?
		GROUP BY link.id_skin";
		$query = $this->dbh->prepare($sql);
		$query->execute([$order->getId()]);
		$skins = $query->fetchAll(PDO::FETCH_CLASS, 'Skin', [$this->dbh]);
		return $skins;
	}
/*
	search($params)
	{
		$sql = "SELECT * FROM skins WHERE ";
		if (isset($params['type']))
		{
			$sql .= "truc=?";
			$prep[] = $params['type'];
		}

	}
*/
}
?>