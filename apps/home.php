<?php

$manager = new CollectionManager($dbh);
$collection = $manager->findLastCollection();
$manager = new SkinManager($dbh);
$articles = $manager->findByCollection($collection);

require('./views/home.phtml');

?>