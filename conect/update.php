<?php
header("Access-Control-Allow-Origin: *");
require('conect.php');
$id = $_GET["id"];
mysql_query("UPDATE usuarios SET openapp = openapp + 1 WHERE iduser = '".$id."'
");
echo mysql_error();
	$sql = "SELECT iduser, openapp FROM usuarios WHERE iduser = '".$id."'";
	echo mysql_error();
	$req = mysql_query($sql);
	while($result = mysql_fetch_object($req)){
		$id = $result->iduser;
		echo $openapp = $result->openapp;
	}
?>