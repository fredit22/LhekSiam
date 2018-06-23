<?php
	$dbhost = "127.0.0.1";
	$dbuser = "root";
	$dbpass = "admin";
	$dbname = "lheksiam";

	if(!($conn=mysql_connect($dbhost,$dbuser, $dbpass)))
	{
		die("Couldnt't establish connection to Mysql, database ");
	}

	if(!mysql_select_db($dbname))
	{
		die("Couldn't connect to database $dbname !");
	}
		mysql_query("SET NAMES UTF8");
?>