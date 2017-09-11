<?php
class Order
{
	private $id;
	private $id_user;
	private $status;
	private $date;
	private $skins;


	private $dbh;


	public function __construct($dbh)
	{
		$this->dbh = $dbh;
		$this->getSkins();
	}

	public function getId()
	{
		return $this->id;
	}
	public function getIdUser()
	{
		return $this->id_user;
	}
	public function getStatus()
	{
		return $this->status;
	}
	public function getDate()
	{
		return $this->date;
	}

	public function getSkins()
	{
		if ($this->skins == null) {
			$manager = new SkinManager($this->dbh);
			$this->skins = $manager->findByOrder($this);
		}
		return $this->skins;
	}

	public function getTotalPrice()
	{
		$total = 0;
		$skins = $this->getSkins();
		foreach ($skins as $skin) {
			$total += $skin->getPrice();
			
		}
		return money_format('%.2n', $total);
	}


	public function setIdUser($id_user)
	{
		$this->id_user = $id_user;
	}
	public function setStatus($status)
	{
		$this->status = $status;
	}
	public function setDate($date)
	{
		$this->date = $date;
	}

	public function addItem(Skin $skin)
	{
		$this->skins[] = $skin;
	}

	public function save() {
		$manager = new OrderManager($this->dbh);
		$manager->save($this);
	}
}
?>