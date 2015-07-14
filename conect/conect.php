<?php header("Access-Control-Allow-Origin: *");
 // datos para la conexion a mysql
define('DB_SERVER','localhost');
define('DB_NAME','projerde_md');
define('DB_USER','projerde_md');
define('DB_PASS','md1727');

$conex = mysql_connect (DB_SERVER,DB_USER,DB_PASS);
mysql_select_db(DB_NAME,$conex);
?>