<?php
if (isset($_POST['action']))
{
	$action = $_POST['action'];
	if ($action == 'login')
	{
		if (isset($_POST['nickname'], $_POST['password']))
		{
			$manager = new UserManager($dbh);
			try {
				$user = $manager->login($_POST['nickname'], $_POST['password']);
			}
			catch (Exception $e) {
				$error = $e->getMessage();
			}
		}
	}
	else if ($action == 'register')
	{
		if (isset($_POST['nickname'], $_POST['password'], $_POST['mail']))
		{
			$manager = new UserManager($dbh);
			try {
				$user = $manager->create($_POST['nickname'], $_POST['password'], $_POST['password_confirmation'], $_POST['mail']);
			}
			catch (Exception $e) {
				$error = $e->getMessage();
			}
		}
	}

	else if ($action == 'disconnect')
	{
		$_SESSION = [];
		session_destroy();
	}
}
?>