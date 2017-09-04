<?php
class User
{
	private $id;
	private $nickname;
	private $password;
	private $mail;

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

	public function setNickname($nickname)
	{
		$this->nickname = $nickname;
	}
	public function setPassword($password)
	{
		$this->password = $password;
	}
	public function setMail($mail)
	{
		$this->mail = $mail;
	}
}
?>