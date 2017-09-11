<?php

$manager = new TypeManager($dbh);
$type = $manager->findById($_GET['type']);
$manager = new SkinManager($dbh);
$articles = $manager->findByType($type);
$h1 = $type->getName();

require('./views/articles.phtml');

?>