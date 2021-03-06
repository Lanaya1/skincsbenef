<?php
if (!empty($error)) {
	echo $error;
}

if (!empty($_SESSION)) {
	$manager = new UserManager($dbh);
	$user = $manager->findById($_SESSION['id']);
	
	$manager = new OrderManager($dbh);
	$order = $user->getCurrentOrder();
	if (!$order) {
		$order = $manager->newOrder($user);
	}
	$items = $user->getCurrentOrder()->getQuantitySkin();
	$price = $user->getCurrentOrder()->getTotalPrice();
	require('./views/header_connected.phtml');
}
else {
	require('./views/header.phtml');
}

?>