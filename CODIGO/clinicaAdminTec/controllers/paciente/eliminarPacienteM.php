<?php
    include '../../controllers/conexion.php';

	$db_conexionEdit= mysqli_connect($db_host,$db_user,$db_pass,$db_nombre,$port);
	
	$idEdit = utf8_decode($_GET["id"]);	
    
   // $sqlDeleteHM = "DELETE FROM historial_med WHERE historial_med.id_paciente = '$idEdit';";
	$sqlDeleteHM = "DELETE FROM pacientes WHERE id_paciente = '$idEdit';";
	//$sqlUpdate = "UPDATE pacientes SET id_medicamento = NULL WHERE id_paciente = $idEdit;";
	$sqlUpdate = "";


	if($db_conexionEdit->query($sqlDeleteHM)==true){
        //if($db_conexionEdit->query($sqlUpdate)==true){
            $db_conexionEdit -> close();
	        header("Location: ../../views/paciente/paciente.php");
	        ob_end_flush();
        //}
        //else{
            //echo "ERROR AL ELIMINAR: ". $sqlUpdate;
        //}
	}
	else{
		echo "ERROR AL MODIFICAR REGISTRO: ". $sqlDeleteHM;
	}
?>