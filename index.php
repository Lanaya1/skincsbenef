<?php
session_start();

$dbh = new PDO('mysql:host=localhost;dbname=skincsbenef', 'root', 'troiswa', [PDO::ATTR_DEFAULT_FETCH_MODE=>PDO::FETCH_ASSOC, PDO::MYSQL_ATTR_INIT_COMMAND => 'SET NAMES utf8', PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION]);

require('./apps/skel.php');

?>