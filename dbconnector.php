<?php

ob_start();

$conn = mysql_select_db('leadcoin_adolfb',  mysql_connect('localhost','root',''))or die(mysql_error());
?>