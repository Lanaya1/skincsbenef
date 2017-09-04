<?php

$sql = 'SELECT name
		FROM collection';
$sth = $dbh->prepare($sql, array(PDO::ATTR_CURSOR => PDO::CURSOR_FWDONLY));
$sth->execute();
$collections = $sth->fetchAll();
foreach ($collections as $collection) {
	require('./views/loop_collection.phtml');
}


?>