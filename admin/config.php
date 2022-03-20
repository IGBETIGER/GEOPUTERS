<?php

	$DB_HOST = '127.0.0.1';
	$DB_USER = 'leadcoin_adolfb';
	$DB_PASS = 'KZFSvx2lxYNY';
	$DB_NAME = 'leadcoin_adolfb';
	
	try{
		$DB_con = new PDO("mysql:host={$DB_HOST};dbname={$DB_NAME}",$DB_USER,$DB_PASS);
		$DB_con->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
	}
	catch(PDOException $e){
		echo $e->getMessage();
	}
	
