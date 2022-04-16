<?php
//abrimos la sesión
session_start();
//Si la variable sesión está vacía
if (!isset($_SESSION['administrador'])) 
{ 
            /* nos envía a la siguiente dirección en el caso de no poseer autorización */
            header("location:/proyectos/clinicaAdminTec/index.php"); 
    
}

?>
<?php
    ob_start();
    require_once '../../controllers/conexion.php';

    //USUARIOS
    $db_conexionPEdit = mysqli_connect($db_host, $db_user, $db_pass, $db_nombre, $port);
    $idEdit = utf8_decode($_GET["id"]);
    $db_conexionPEdit -> real_query("SELECT p.id_paciente as id, p.nombres,p.apellidos, p.fecha_nacimiento, p.telefono, p.direccion, p.correo_electronico FROM id17547686_db_clinicaproyecto_2021.pacientes AS p WHERE p.id_paciente = $idEdit");
    $resultadoPEdit = $db_conexionPEdit -> use_result();
    $filaPacienteEdit = $resultadoPEdit -> fetch_assoc();

    //MEDICAMENTOS
    $db_conexionMEdit = mysqli_connect($db_host, $db_user, $db_pass, $db_nombre, $port);
    $db_conexionMEdit->real_query("SELECT id_medicamento AS id, nombre FROM id17547686_db_clinicaproyecto_2021.medicamento;");
    $resultadoMEdit = $db_conexionMEdit->use_result();
    $idPacienteP = $resultadoMEdit->fetch_assoc();

    //DOCTOR QUE ATIENDE
    $db_conexionDEdit = mysqli_connect($db_host, $db_user, $db_pass, $db_nombre, $port);
    $db_conexionDEdit->real_query("SELECT id_empleado AS id, nombres, apellidos FROM id17547686_db_clinicaproyecto_2021.empleados WHERE id_puesto=1;");
    $resultadoDEdit = $db_conexionDEdit->use_result();
    $idPacienteD = $resultadoDEdit->fetch_assoc();
?>

<!doctype html>
<html lang="en">

<head>
    <title>Agregar medicamento</title>
    <link rel="shortcut icon" href="imgs\titleUsuarios.png" />

    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS v5.0.2 -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">

</head>

<?php include '../cabecera.php'; ?>

<body background="../imgs/fondoUsuarios.jpg" style="background-size: cover; background-repeat: no-repeat; margin: 0px; height: 100%;">
<div class="col-md-8" style="margin-left: 50px;">
        <div style="padding:10px; background-color: #1B1F78; color:white; margin-top: 2em;">
            <h1 class="text-center">Agregar Medicamento</h1>
        </div>
        <div style="padding:10px; background-color: white; width: 100%;">
    <div class="container">
        <form class="d-flex" action="" method="POST" autocomplete="off">
            <div class="col">
                <input type="hidden" name="id" id="id" value="<?php echo $filaPacienteEdit['id']; ?>">
                
                <div class="row">
					<div class="col-md-6">
                        <label for="lbl_nombres" class="form-label"><b>Nombres</b></label>
                        <input type="text" name="txt_nombres" id="txt_nombres" class="form-control" value="<?php echo $filaPacienteEdit['nombres']; ?>" disabled>
                    </div>
                    <div class="col-md-6">
                        <label for="lbl_apellidos" class="form-label"><b>Apellidos</b></label>
                        <input type="text" name="txt_apellidos" id="txt_apellidos" class="form-control" value="<?php echo $filaPacienteEdit['apellidos']; ?>" disabled>
                    </div>
                </div>

                <div class="row" style="margin-top: 1em;">
					<div class="col-md-6">
                        <label for="lbl_fn" class="form-label"><b>Fecha Nacimiento</b></label>
                        <input type="date" name="txt_fecha_nacimiento" id="txt_fecha_nacimiento" class="form-control" value="<?php echo $filaPacienteEdit['fecha_nacimiento']; ?>" disabled>
                    </div>
                    <div class="col-md-6">
                        <label for="lbl_telefono" class="form-label"><b>Telefono</b></label>
                        <input type="text" name="txt_telefono" id="txt_telefono" class="form-control" value="<?php echo $filaPacienteEdit['telefono']; ?>" disabled>
                    </div>
                </div>

                <div class="row" style="margin-top: 1em;">
					<div class="col-md-6">
                        <label for="lbl_direccion" class="lbl_direccion"><b>Direccion</b></label>
                        <input type="text" name="txt_direccion" id="txt_direccion" class="form-control" value="<?php echo $filaPacienteEdit['direccion']; ?>" disabled>
                    </div>
                    <div class="col-md-6">
                        <label for="lbl_correo" class="lbl_direccion"><b>Correo</b></label>
                        <input type="text" name="txt_correo" id="txt_correo" class="form-control" value="<?php echo $filaPacienteEdit['correo_electronico']; ?>" disabled>
                    </div>
                </div>
                <?php $db_conexionPEdit->close(); ?>

                <div class="row" style="margin-top: 1em;">
					<div class="col-md-6">
                        <label for="lbl_medicamento" class="form-label"><b>Medicamento</b></label>
                        <select class="form-select" name="drop_medicamento" id="drop_medicamento" required>
                            <option value="<?php echo $idPacienteP['id']; ?>"><?php echo $idPacienteP['nombre']; ?></option>

                            <?php
                            while ($filaMedicamento = $resultadoMEdit->fetch_assoc()) {
                                echo "<option value=" . $filaMedicamento['id'] . ">" . $filaMedicamento['nombre'] . "</option>";
                            }
                            $db_conexionMEdit->close();
                            ?>
                        </select>
                    </div>
                    <div class="col-md-6">
                        <label for="lbl_medico" class="form-label"><b>Medico</b></label>
                        <select class="form-select" name="drop_medico" id="drop_medico" required>
                            <option value="<?php echo $idPacienteD['id']; ?>">Doc. <?php echo $idPacienteD['nombres']; echo " "; echo $idPacienteD['apellidos']; ?></option>

                            <?php
                            while ($filaMedico = $resultadoDEdit->fetch_assoc()) {
                                echo "<option value=" . $filaMedico['id'] . "> Doc. " . $filaMedico['nombres'] ." ". $filaMedico['apellidos']. "</option>";
                            }
                            $db_conexionDEdit->close();
                            ?>
                        </select>
                    </div>
                </div>

                <div class="col-md-12" style="margin-top: 1em;">
                    <label for="lbl_observaciones" class="form-label"><b>Observaciones</b></label>
					<textarea class="form-control" name="txt_observaciones" id="txt_observaciones" rows="3" placeholder="Observaciones de lo que debe hacer el paciente..."></textarea>
                </div>

                

                <div class="mb-3" style="margin-top: 2em;">
                    <a href="paciente.php" class="btn btn-info">Regresar a Pacientes</a> &nbsp;&nbsp;
                    <input type="submit" name="btn_editar" id="btn_editar" class="btn btn-success" value="Agregar">
                </div>
            </div>
        </form>

    </div>

    <?php

    if (isset($_POST["btn_editar"])) {
        include '../../controllers/paciente/agregarMedicamento.php';
    }

    ?>

    <!-- Bootstrap JavaScript Libraries -->
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.2/dist/umd/popper.min.js" integrity="sha384-IQsoLXl5PILFhosVNubq5LC7Qb9DXgDA9i+tQ8Zj3iwWAwPtgFTxbJ8NT4GN1R8p" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.min.js" integrity="sha384-cVKIPhGWiC2Al4u+LWgxfKTRIcfu0JTxR+EQDz/bgldoEyl4H0zUF0QKbrJ0EcQF" crossorigin="anonymous"></script>
</body>

</html>