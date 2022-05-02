<?php
    include '../../controllers/conexion.php';

	$db_conexionPEliminar = mysqli_connect($db_host,$db_user,$db_pass,$db_nombre,$port);
	
	$id = utf8_decode($_GET["id"]);

	$sqlDelete = "DELETE FROM pacientes WHERE id_paciente = '$id';";
	//$sqlDelete = "DELETE FROM historial_medico WHERE historial_medico.id_paciente = '$id';";								  
	if($db_conexionPEliminar->query($sqlDelete)==true){
	
	} else {
		echo 'ERROR AL ELIMINAR REGISTRO';
	}
	$db_conexionPEliminar -> close();
	header("Location: ../../views/paciente/paciente.php");
    die();
?>