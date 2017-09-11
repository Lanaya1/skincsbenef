<?php

$manager = new CollectionManager($dbh);
$collections = $manager->findAll();
foreach ($collections as $collection) {
	require('./views/loop_collection.phtml');
}


?>