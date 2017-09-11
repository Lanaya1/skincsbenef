<?php
$manager = new WeaponManager($dbh);
$weapons = $manager->findByType($type);

foreach ($weapons as $weapon) {
	require('./views/loop_weapon.phtml');
}

?>