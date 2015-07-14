<?php
header("Access-Control-Allow-Origin: *");
require('conect.php');
$openapp = 1;

$guardar = "INSERT INTO usuarios (openapp, fecha, fechaupdate) VALUES ('$openapp', CURRENT_TIMESTAMP, CURRENT_TIMESTAMP)"; 
mysql_query($guardar); 
$lastid =  mysql_insert_id();
		echo mysql_error();
		echo $lastid;
?>