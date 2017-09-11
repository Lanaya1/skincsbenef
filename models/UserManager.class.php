<?php
class UserManager
{
	private $dbh;

	public function __construct($dbh)
	{
		$this->dbh = $dbh;
	}

	public function findAll()
	{
		$sql = "SELECT * FROM user";
		$query = $this->dbh->prepare($sql);
		$query->execute();
		$users = $query->fetchAll(PDO::FETCH_CLASS, 'User', [$this->dbh]);
		return $users;
	}

	public function findById($id)
	{
		$sql = "SELECT * FROM user WHERE id = ?";
		$query = $this->dbh->prepare($sql);
		$query->execute([$id]);
		$user = $query->fetchObject('User', [$this->dbh]);
		return $user;
	}

	public function findByNickname($nickname)
	{
		$sql = "SELECT * FROM user WHERE nickname = ?";
		$query = $this->dbh->prepare($sql);
		$query->execute([$nickname]);
		$user = $query->fetchObject('User', [$this->dbh]);
		return $user;
	}

	public function create($nickname, $password, $passwordBis, $mail)
	{
		$user = new User($this->dbh);

		$user->setNickname($nickname);
		$user->setPassword($password, $passwordBis);
		$user->setMail($mail);

		$sql = "INSERT INTO user (nickname, password, mail) VALUES(?, ?, ?)";
		$query = $this->dbh->prepare($sql);
		$query->execute([$user->getNickname(), $user->getPassword(), $user->getMail()]);
		$id = $this->dbh->lastInsertId();
		return $this->findById($id);
	}

	public function update(User $user)
	{
		$sql = "UPDATE user SET nickname=?, password=?, mail=? WHERE id=?";
		$query = $this->dbh->prepare($sql);
		$query->execute([$user->getNickname(), $user->getPassword(), $user->getMail(), $user->getId()]);
		return $this->findById($user->getId());
	}

	public function login($nickname, $password) {
		$user = $this->findByNickname($nickname);
		if (!$user)
			throw new Exception("This nickname does not exist");
		else if (!password_verify($password, $user->getPassword()))
			throw new Exception("Wrong password");
		else 
			$_SESSION['id'] = $user->getId();
	}

	public function getCurrentOrder(User $user) {
		$manager = new OrderManager($dbh);
		$order = $manager->findCurrentOrderByUser($user);
	}
}
?>