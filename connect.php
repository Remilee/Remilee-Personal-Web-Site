<?php	
	$db_host = 'localhost';
	$db_user = 'remilee';
	$db_password = '***';
	$db_name = 'diary';
	$dbc = mysqli_connect($db_host, $db_user, $db_password, $db_name) or die('Ошибка подключения к mysql');
	$utf8 = "SET NAMES `utf8`";
    mysqli_query($dbc, $utf8);
