<?php
require('conect.php');
$id = $_GET["id"]; 
//$id = 1;
$sql = "SELECT iduser FROM usuarios WHERE iduser = '".$id."'";
//$sql = "SELECT * FROM usuarios";
echo mysql_error();

		$req = mysql_query($sql);

?>
