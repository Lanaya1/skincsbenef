<?php
class User
{
	private $id;
	private $nickname;
	private $password;
	private $mail;
	private $order;

	private $dbh;

	public function __construct($dbh)
	{
		$this->dbh = $dbh;
	}

	public function getId()
	{
		return $this->id;
	}
	public function getNickname()
	{
		return $this->nickname;
	}
	public function getPassword()
	{
		return $this->password;
	}
	public function getMail()
	{
		return $this->mail;
	}

	public function getCurrentOrder() {
		if ($this->order == null) {
			$manager = new OrderManager($this->dbh);
			$this->order = $manager->findCurrentOrderByUser($this);
		}
		return $this->order;
	}

	public function setNickname($nickname)
	{
		$manager = new UserManager($this->dbh);
		$checkUser = $manager->findByNickname($nickname);
		if ($checkUser)
			throw new Exception("This nickname is already used");
		else if (strlen($nickname) < 4 && strlen($nickname) > 15)
			throw new Exception("Invalid nickname, must be between 4 and 15 long");
		else if (!ctype_alnum($nickname))
			throw new Exception("Invalid nickname, must be only contains letters or digits");
		else
			$this->nickname = $nickname;
	}

	public function setPassword($password, $passwordBis)
	{
		if (strlen($password) < 4 && strlen($password) > 30)
			throw new Exception("Invalid password, must be between 4 and 30 long");
		else if ($password !== $passwordBis)
			throw new Exception("Passwords don't match");
		else {
			$password = password_hash($password, PASSWORD_BCRYPT);
			$this->password = $password;
		}
	}

	public function setMail($mail)
	{
		if (filter_var($mail, FILTER_VALIDATE_EMAIL))
			$this->mail = $mail;
		else
			throw new Exception("Invalid email format");
	}
}
?>