<?php
$manager = new OrderManager($dbh);
foreach ($items as $item) {
	$user->getCurrentOrder()->getQuantitySkin();
	require('./views/loop_cart_item.phtml');
}
?>