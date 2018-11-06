<?php
// database logingegevens
$db_hostname = 'localhost'; //of '127.0.0.1'
$db_username = '81472_DBB';
$db_password = 'hYzn97@0';
$db_database = '81472_beroeps';

// maak de database-verbinding
$mysqli = mysqli_connect($db_hostname, $db_username, $db_password,
	$db_database);

//Als de verbinding niet gemaakt kant worden: geef een melding
if (!$mysqli){
	echo "Fout: geen connectie naar database. <br>";
	echo "Errno: " . mysql_connect_errno() ."<br/>";
	echo "Error: " . mysql_connect_error() ."<br/>";
	exit;
}