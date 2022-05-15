<?php
    include '../../controllers/conexion.php';

	$db_conexionEdit= mysqli_connect($db_host,$db_user,$db_pass,$db_nombre,$port);
	
	$idEdit = utf8_decode($_POST["id"]);
	
	//PACIENTES
	$drop_medicamento = utf8_decode($_POST["drop_medicamento"]);

	//HISTORIAL_MED
	$drop_medico = utf8_decode($_POST["drop_medico"]);
	$txt_observaciones = utf8_decode($_POST["txt_observaciones"]);



	//PACIENTES
	$sqlUpdate = "UPDATE webapsgt_dbclinicaadmin.historial_med SET id_receta_medica = '".$drop_medicamento."' WHERE webapsgt_dbclinicaadmin.historial_med.id_paciente = $idEdit;";

	//HISTORIAL_MED
	$sqlInsertHistorial =  "INSERT INTO webapsgt_dbclinicaadmin.historial_med(id_paciente,id_empleado,observaciones) 
                        	VALUES (".$idEdit.",".$drop_medico.",'".$txt_observaciones."')";



	if($db_conexionEdit->query($sqlUpdate)==true){
		if($db_conexionEdit->query($sqlInsertHistorial)==true){
			$db_conexionEdit -> close();
			header("Location: ../../views/paciente/paciente.php");
			ob_end_flush();
		}
		else{
			echo "ERROR EN EL REGISTRO: ". $sqlInsertHistorial;
			$db_conexionEdit -> close();
		}
	}
	else{
		echo "ERROR AL MODIFICAR REGISTRO: ". $sqlUpdate;
		$db_conexionEdit -> close();
	}    
?>