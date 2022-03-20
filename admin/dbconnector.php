<?php
$conn = mysql_select_db('leadcoin_adolfb',  mysql_connect('localhost','leadcoin_adolfb','KZFSvx2lxYNY'))or die(mysql_error());

defined("DS") ? null : define("DS", DIRECTORY_SEPARATOR);

defined("UPLOAD_DIRECTORY") ? null : define("UPLOAD_DIRECTORY", "uploads");
?>