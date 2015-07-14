<?php
require('conect.php');
$id = $_GET["id"]; 
//$id = 1;
$sql = "SELECT * FROM usuarios WHERE iduser = '".$id."'";
//$sql = "SELECT * FROM usuarios";
echo mysql_error();

		$req = mysql_query($sql);

?>
<!doctype html>
<html>
<head>
<meta charset="iso-8859-1">
<title>Datos</title>
</head>

<body>
	<?php
		while($result = mysql_fetch_object($req)){
			$id = $result->iduser;
			$openapp = $result->openapp;
			$fecha = $result->fecha;
			$fechaupdate = $result->fechaupdate;
			?>
			<ul>
				<li><?php echo $id ?></li>
				<li><?php echo $openapp ?></li>
				<li><?php echo $fecha ?></li>
				<li><?php echo $fechaupdate ?></li>
			</ul>
		<?php
		}
	?>
</body>
</html>