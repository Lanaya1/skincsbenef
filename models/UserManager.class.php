<?php
class UserManager
{
	private $dbh;

	public function __construct($db)
	{
		$this->dbhh = $dbh;
	}

	public function findAll()
	{
		$sql = "SELECT * FROM users";
		$query = $this->dbh->prepare($sql);
		$query->execute();
		$users = $query->fetchAll(PDO::FETCH_CLASS, 'User');
		return $users;
	}

	public function findById($id)// OBLIGATOIRE
	{
		$sql = "SELECT * FROM users WHERE id = ?";
		$query = $this->dbh->prepare($sql);
		$query->execute([$id]);
		$user = $query->fetchObject('User');
		return $user;
	}

	public function findByNickname($nickname)
	{
		$sql = "SELECT * FROM users WHERE nickname = ?";
		$query = $this->dbh->prepare($sql);
		$query->execute([$nickname]);
		$user = $query->fetchObject('User');
		return $user;
	}

	public function create($nickname, $password, $mail)
	{
		$user = new User();

		$user->setNickname($nickname);
		$user->setPassword($password);
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
}
?>