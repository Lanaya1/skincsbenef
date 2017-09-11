<?php

$manager = new WeaponManager($dbh);
$weapon = $manager->findById($_GET['weapon']);
$manager = new SkinManager($dbh);
$articles = $manager->findByWeapon($weapon);
$h1 = $weapon->getName();

require('./views/articles.phtml');

?>