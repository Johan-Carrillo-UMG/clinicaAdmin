<?php
	include '../../controllers/conexion.php';


	$db_conexionRInsert = mysqli_connect($db_host,$db_user,$db_pass,$db_nombre,$port);
    $txt_rol = utf8_decode($_POST["txt_rol"]);

	$sqlInsertRol =  "INSERT INTO webapsgt_dbclinicaadmin.roles(rol) VALUES ('".$txt_rol."');";
	
	if($db_conexionRInsert->query($sqlInsertRol)==true){
		$db_conexionRInsert -> close();
		
		header("Location: ../../views/roles/roles.php");
		ob_end_flush();
	}
	else{
		echo"ERROR EN EL REGISTRO: ". $sqlInsertRol ."<br>". $db_conexionRInsert -> close();
	}
?>