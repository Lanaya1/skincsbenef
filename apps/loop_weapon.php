<?php

$sql = 'SELECT *
		FROM weapon
		WHERE id_type = ?';
$sth = $dbh->prepare($sql, array(PDO::ATTR_CURSOR => PDO::CURSOR_FWDONLY));
$sth->execute(array($type['id']));
$weapons = $sth->fetchAll();
foreach ($weapons as $weapon) {
	require('./views/loop_weapon.phtml');
}


?>