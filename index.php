<?php
session_start();

$dbh = new PDO('mysql:host=192.168.1.3;dbname=skincsbenef', 'skincsbenef', 'skincsbenef', [PDO::ATTR_DEFAULT_FETCH_MODE=>PDO::FETCH_ASSOC, PDO::MYSQL_ATTR_INIT_COMMAND => 'SET NAMES utf8', PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION]);

setlocale(LC_MONETARY, 'en_US.UTF-8');
$title = '';
$access = ['register', 'weapon', 'type', 'rarity', 'collection', 'search', '404'];
$page = 'home';
if (isset($_GET['page']))
{
	if (in_array($_GET['page'], $access))
	{
		$title = " - ".$_GET['page'];
		$page = $_GET['page'];
	}
	else
	{
		$title = " - 404";
		$page = "404";
	}
}

function __autoload($classname) {
	require('models/'.$classname.'.class.php');
}


// $accessTraitement = ["create" => "article", "delete" => "article", "update" => "article", "login" => "user", "register" => "user", "logout" => "user"];
// if (isset($accessTraitement[$page])) {
// 	require('apps/traitements/'.$accessTraitement[$page].'.php');
// }

require('./apps/traitement_user.php');
require('./apps/traitement_cart.php');

require('./apps/skel.php');
?>