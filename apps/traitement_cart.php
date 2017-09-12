<?php
if (isset($_POST['cart']))
{
	$cart = $_POST['cart'];
	if ($cart == 'add')
	{
		$manager = new SkinManager($dbh);
		$skin = $manager->findById($_POST['id_skin']);
		if ($skin)
		{
			$manager = new UserManager($dbh);
			$user = $manager->findById($_SESSION['id']);
			if ($user)
			{
				$user->getCurrentOrder()->addItem($skin);
				$user->getCurrentOrder()->save();
			}
		}
	}	
	else if ($cart == 'delete')
	{
		$manager = new SkinManager($dbh);
		$skin = $manager->findById($_POST['id_skin']);
		$manager = new UserManager($dbh);
		$user = $manager->findById($_SESSION['id']);
		$user->getCurrentOrder()->deleteItem($skin);
		$user->getCurrentOrder()->save();
	}

	else if ($cart == 'resetCart')
	{
		$manager = new UserManager($dbh);
		$user = $manager->findById($_SESSION['id']);
		$user->getCurrentOrder()->deleteAllItem();
		$user->getCurrentOrder()->save();
	}
}
?>