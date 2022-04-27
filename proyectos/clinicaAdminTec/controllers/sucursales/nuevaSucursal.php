<?php
	include '../../controllers/conexion.php';
	$db_conexionRInsert = mysqli_connect($db_host,$db_user,$db_pass,$db_nombre,$port);
    $txt_nombre = utf8_decode($_POST["txt_nombre"]);
    $txt_direccion = utf8_decode($_POST["txt_direccion"]);
	$sqlInsertPuesto =  "INSERT INTO webapsgt_dbclinicaadmin.sucursales(nombre, dirección) VALUES ('".$txt_nombre."', '".$txt_direccion."');";
	
	if($db_conexionRInsert->query($sqlInsertPuesto)==true){
		$db_conexionRInsert -> close();
		
		header("Location: ../../views/sucursales/sucursales.php");
		ob_end_flush();
	}
	else{
		echo"ERROR EN EL REGISTRO: ". $sqlInsertPuesto ."<br>". $db_conexionRInsert -> close();
	}
?>