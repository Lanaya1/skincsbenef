<?php

foreach ($items as $item) {
	$user->getCurrentOrder()->getSkins();
	require('./views/loop_cart_item.phtml');
}


?>