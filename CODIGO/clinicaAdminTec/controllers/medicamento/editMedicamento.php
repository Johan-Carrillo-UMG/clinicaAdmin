<?php
   include '../../controllers/conexion.php';
	
   $db_conexionEditM = mysqli_connect($db_host,$db_user,$db_pass,$db_nombre,$port);
	
	$idEditM = utf8_decode($_POST["id"]);
	$txt_nombre = utf8_decode($_POST['txt_nombre']);
	$txt_marca = utf8_decode($_POST["txt_marca"]);
	$txt_descripcion = utf8_decode($_POST["txt_descripcion"]);
	$txt_costo = utf8_decode($_POST["txt_costo"]);
	$txt_venta = utf8_decode($_POST["txt_venta"]);
	$txt_cantidad = utf8_decode($_POST['txt_cantidad']);
	
	$sqlUpdate = "UPDATE webapsgt_dbclinicaadmin.medicamento SET nombre = '".$txt_nombre."', marca = '".$txt_marca."', descripcion = '".$txt_descripcion."', precio_costo = '".$txt_costo."', precio_venta = '".$txt_venta."' , cantidad = ".$txt_cantidad." WHERE medicamento.id_medicamento = $idEditM;";

	//echo"<br><br><br><br>";
	if($db_conexionEditM->query($sqlUpdate)==true){
		//echo 'REGISTRO MODIFICADO';
	}
	else{
		//echo 'ERROR AL MODIFICAR REGISTRO';
	}
	//echo"<br>SQL-->:  ".$sqlUpdate."<br>";
	$db_conexionEditM -> close();
	header("Location: ../../views/medicamento/medicamento.php");
    
	ob_end_flush();
    
?>