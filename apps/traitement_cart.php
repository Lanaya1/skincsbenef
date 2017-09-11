<?php
if (isset($_POST['cart']))
{
	$cart = $_POST['cart'];
	if ($cart == 'add')
	{
		$manager = new SkinManager($dbh);
		$skin = $manager->findById($_POST['id_skin']);
		$manager = new UserManager($dbh);
		$user = $manager->findById($_SESSION['id']);
		$user->getCurrentOrder()->addItem($skin);
		$user->getCurrentOrder()->save();
	}	
	// else if ($cart == 'delete')
	// {
	// 	if (isset($_POST['nickname'], $_POST['password'], $_POST['mail']))
	// 	{
	// 		$manager = new UserManager($dbh);
	// 		try {
	// 			$user = $manager->create($_POST['nickname'], $_POST['password'], $_POST['password_confirmation'], $_POST['mail']);
	// 		}
	// 		catch (Exception $e) {
	// 			$error = $e->getMessage();
	// 		}
	// 	}
	// }

	// else if ($cart == 'deleteAll')
	// {
	// 	$_SESSION = [];
	// 	session_destroy();
	// }
}
?>