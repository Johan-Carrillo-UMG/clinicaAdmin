<?php
	include '../../controllers/conexion.php';

	$db_conexionUInsert = mysqli_connect($db_host,$db_user,$db_pass,$db_nombre,$port);
	
	$txt_nombre = utf8_decode($_POST["txt_nombre"]);
	$txt_marca = utf8_decode($_POST["txt_marca"]);
	$txt_cantidad = utf8_decode($_POST['txt_cantidad']);
	$txt_descripcion = utf8_decode($_POST["txt_descripcion"]);
	$txt_costo = utf8_decode($_POST["txt_costo"]);
	$txt_venta = utf8_decode($_POST["txt_venta"]);

	$sqlInsertUser =  "INSERT INTO webapsgt_dbclinicaadmin.medicamento(nombre, marca, descripcion, precio_costo, precio_venta, cantidad) 
						VALUES ( '".$txt_nombre."', '".$txt_marca."', '".$txt_descripcion."', '".$txt_costo."', '".$txt_venta."', ".$txt_cantidad.")";
	
	if($db_conexionUInsert->query($sqlInsertUser)==true){
		$db_conexionUInsert -> close();
		
		header("Location: ../../views/medicamento/medicamento.php");
		ob_end_flush();
	}
	else{
		echo"ERROR EN EL REGISTRO: ". $sqlInsertUser ."<br>". $db_conexionUInsert -> close();
	}
?>