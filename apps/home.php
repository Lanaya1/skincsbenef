<?php

/**

	TODO:
	- get id last collection

 */

$lastId = 1;


$sql = 'SELECT s.id AS id, s.name AS name, s.price AS price, w.name AS weapon, r.name AS rarity, t.name AS type, id_rarity AS id_rarity
		FROM skin AS s
		INNER JOIN weapon AS w ON w.id = s.id_weapon
		INNER JOIN rarity AS r ON r.id = s.id_rarity
		INNER JOIN type AS t ON t.id = s.id_type
		WHERE id_collection = ?
		ORDER BY id_rarity DESC';
$sth = $dbh->prepare($sql, array(PDO::ATTR_CURSOR => PDO::CURSOR_FWDONLY));
$sth->execute(array($lastId));
$articles = $sth->fetchAll();

require('./views/home.phtml');

?>