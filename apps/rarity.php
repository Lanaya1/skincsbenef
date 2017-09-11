<?php

$manager = new RarityManager($dbh);
$rarity = $manager->findById($_GET['rarity']);
$manager = new SkinManager($dbh);
$articles = $manager->findByRarity($rarity);
$h1 = $rarity->getName();

require('./views/articles.phtml');

?>