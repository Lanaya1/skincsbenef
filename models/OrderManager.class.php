<?php
class OrderManager
{
	private $dbh;

	public function __construct($dbh)
	{
		$this->dbh = $dbh;
	}

	public function findAll()
	{
		$sql = "SELECT * FROM order ORDER BY id DESC";
		$query = $this->dbh->prepare($sql);
		$query->execute();
		$orders = $query->fetchAll(PDO::FETCH_CLASS, 'Order', [$this->dbh]);
		return $orders;
	}

	public function findById($id)
	{
		$sql = "SELECT * FROM `order` WHERE id = ?";
		$query = $this->dbh->prepare($sql);
		$query->execute([$id]);
		$order = $query->fetchObject('Order');
		return $order;
	}

	public function findByIdUser(IdUser $id_user)
	{
		$sql = "SELECT * FROM order WHERE id_user = ? ORDER BY id DESC";
		$query = $this->dbh->prepare($sql);
		$query->execute([$id_user->getId()]);
		$orders = $query->fetchAll(PDO::FETCH_CLASS, 'Order', [$this->dbh]);
		return $orders;
	}

	public function findByStatus(Status $status)
	{
		$sql = "SELECT * FROM order WHERE status = ? ORDER BY id DESC";
		$query = $this->dbh->prepare($sql);
		$query->execute([$id_user->getId()]);
		$orders = $query->fetchAll(PDO::FETCH_CLASS, 'Order', [$this->dbh]);
		return $orders;
	}

	public function findByDate(Date $date)
	{
		$sql = "SELECT * FROM order WHERE date = ? ORDER BY id DESC";
		$query = $this->dbh->prepare($sql);
		$query->execute([$date->getId()]);
		$orders = $query->fetchAll(PDO::FETCH_CLASS, 'Order', [$this->dbh]);
		return $orders;
	}

	public function findCurrentOrderByUser(User $user)
	{
		$sql = "SELECT * FROM `order` WHERE id_user = ? AND status = 'cart' ORDER BY id DESC";
		$query = $this->dbh->prepare($sql);
		$query->execute([$user->getId()]);
		$order = $query->fetchObject('Order', [$this->dbh]);
		return $order;
	}

	public function newOrder(User $user)
	{
		$order = new Order($this->dbh);

		$order->setIdUser($user->getId());

		$sql = "INSERT INTO `order` (id_user, status, date) VALUES(?, 'cart', CURRENT_TIMESTAMP)";
		$query = $this->dbh->prepare($sql);
		$query->execute([$user->getId()]);
		$id = $this->dbh->lastInsertId();
		return $this->findById($id);
	}

	// public function addItem(Order $order, Skin $skin)
	// {
	// 	$sql = "INSERT INTO `link_order_skin` (id_order, id_skin) VALUES(?, ?)";
	// 	$query = $this->dbh->prepare($sql);
	// 	$query->execute([$order->getId(), $skin->getId()]);
	// 	$id = $this->dbh->lastInsertId();
	// }

	public function findAllItemsInCurrentOrder(User $user)
	{
		$order = $this->findCurrentOrderByUser($user);
		$sql = "SELECT * FROM link_order_skin WHERE id_order = ? ORDER BY id DESC";
		$query = $this->dbh->prepare($sql);
		$query->execute([$order->getId()]);
		$items = $query->fetchAll(PDO::FETCH_CLASS, 'Skin', [$this->dbh]);
		return $items;
	}

	public function save(Order $order)
	{
		$sql = "UPDATE `order` SET status = ? WHERE id = ?";
		$query = $this->dbh->prepare($sql);
		$query->execute([$order->getStatus(), $order->getId()]);

		$skins = $order->getSkins();
		$sql = "DELETE FROM link_order_skin WHERE id_order = ?";
		$query = $this->dbh->prepare($sql);
		$query->execute([$order->getId()]);
		foreach ($skins as $skin) {
			$sql ="INSERT INTO `link_order_skin` (id_order, id_skin) VALUES(?, ?)";
			$query = $this->dbh->prepare($sql);
			$query->execute([$order->getId(),$skin->getId()]);
		}	
	}
}
?>