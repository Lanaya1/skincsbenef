<?php

$manager = new CollectionManager($dbh);
$collection = $manager->findById($_GET['collection']);
$manager = new SkinManager($dbh);
$articles = $manager->findByCollection($collection);
$h1 = $collection->getName();

require('./views/articles.phtml');

?>