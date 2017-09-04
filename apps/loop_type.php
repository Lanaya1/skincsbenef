<?php

$sql = 'SELECT *
		FROM type';
$sth = $dbh->prepare($sql, array(PDO::ATTR_CURSOR => PDO::CURSOR_FWDONLY));
$sth->execute();
$types = $sth->fetchAll();
foreach ($types as $type) {
	require('./views/loop_type.phtml');
}


?>