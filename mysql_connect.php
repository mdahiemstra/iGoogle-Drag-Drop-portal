<?php

	$host = 'localhost';
	$username = 'root';
	$password = '';
	$database = 'jsportal';

	$link = mysql_connect($host, $username, $password) or die('DB Connection failed');
	mysql_select_db($database);
	
?>