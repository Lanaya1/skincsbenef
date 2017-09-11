<?php
$manager = new TypeManager($dbh);
$types = $manager->findAll();

foreach ($types as $type) {
	require('./views/loop_type.phtml');
}


?>