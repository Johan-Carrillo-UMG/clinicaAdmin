<?php

ob_start();
session_start();

if(!isset($_SESSION['administrador'])){
    
    if (!isset($_SESSION['usuario'])){ 
            header("location:../index.php");
    }
}

?>

<head>
    <title>Inicio</title>
    <link rel="icon" type="image/png" href="imgs\inicio.png" />
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
</head>

<body background="../imgs/fondoUsuarios.jpg" style="background-size: cover; margin: 0px; height: 100%;">
    <?php 
        include('cabecera.php');   
    ?>
    <br><br>
    <font color="black">
        <div style="margin-top: 10px; margin-right: 20px; margin-bottom: 10px; margin-left: 20px;">
            <div class="text-center">
                <font size=7 color="black" face="Arial Black">
                    Administración de Tecnologías - Grupo#2
                </font>
            </div>
            <br><br>
            <div class="text-justify">
                <font size=3 color="black" face="Arial Black">
                    <div class="row" style="align-items: center;">
                        <div class="col-md-6">
                            <table border="0">
                                <tr>
                                    <td colspan="2">INTEGRANTES:</td>
                                </tr>
                                <tr>
                                    <td>CARNE:</td>
                                    <td></td>
                                    <td>NOMBRES:</td>
                                </tr>
                                <tr>
                                    <td>1290-18-1736</td>
                                    <td>-----</td>
                                    <td>Sara Maria Nataly Ovalle Perez</td>
                                </tr>
                                <tr>
                                    <td>1290-18-8728</td>
                                    <td>-----</td>
                                    <td>Johan Estuardo Carrillo Berducido</td>
                                </tr>
                                <tr>
                                    <td>1290-18-23967</td>
                                    <td>-----</td>
                                    <td>Jhensser Andreé Aguirre Galdámez</td>
                                </tr>
                                <tr>
                                    <td>1290-18-5747</td>
                                    <td>-----</td>
                                    <td>Mario Haroldo Sinay Gaytán</td>
                                </tr>
                                <tr>
                                    <td>1290-18-17071</td>
                                    <td>-----</td>
                                    <td>Jorge Luis Muñoz Elías</td>
                                </tr>
                            </table>
                        </div>
                        <div class="col-md-6">
                            <img src="../imgs/adminTecs.png" height="90%" width="90%">
                        </div>
                    </div>
                    <br>
                    <div align="justify">
                        Este es el proyecto del curso de Administración de Tecnologías del noveno semestre de Ingeniería en Sistemas de la Universidad Mariano Gálvez de Guatemala, 
                        el cual consta de la elaboración de una Clinica Privada que permita la compra de productos medicinales y creación de citas médicas para pacientes 
                        con distintas enfermedades. Así mismo, del lado administrativo, permite llevar el control y mantenimiento CRUD de:
                        <ol>
                            <li>Usuarios</li>
                            <li>Empleados (Doctores, enfermeros, etc.)</li>
                            <li>Clientes / Pacientes</li>
                            <li>Historial médico del paciente</li>
                            <li>Citas médicas</li>
                            <li>Medicamento</li>
                            <li>Sucursales</li>
                        </ol>
                    </div>
                </font>
            </div>
            <br>
            <br>
            <div class="row">
                <div class="col-md-4">
                    <!-- ../tienda -->
                    <a href="#" style="text-decoration: none; color: black">
                        <div class="container" align="justify" style="background-color: #C1DDE7; width: 100%; border: solid; border-color: black;">
                            <div class="text-center">
                                <b><font size=5 face="Times New Roman" color="gray">COMPRAR MEDICAMENTO</font></b>
                                <img src="../imgs/medicamento.jpg" width="90%" class="card-img-top" style="border: solid">
                            </div>
                            <p align="center" style="margin-top: 2em;">
                                <i>
                                    ¡Visita nuestra tienda!<br>
                                    Contamos con todo tipo de producto medicinal para tu salud.
                                </i>
                            </p>
                        </div>
                    </a>
                </div>
                <div class="col-md-4">
                    <!-- citas/citas.php -->
                    <a href="#" style="text-decoration: none; color: black">
                        <div class="container" align="justify" style="background-color: #C1DDE7; width: 100%; border: solid; border-color: black;">
                            <div class="text-center">
                                <b><font size=5 face="Times New Roman" color="gray">CREAR CITA</font></b>
                                <img src="../imgs/citaMedica.png" width="90%" class="card-img-top" style="border: solid; width: 90%">
                            </div>
                            <p align="center">
                                <i>
                                    ¡Crea una cita médica!<br>
                                    Tenemos a los mejores médicos especialistas en distintas ramas.
                                </i>
                            </p>
                        </div>
                    </a>
                </div>
                <div class="col-md-4">
                    <a href="#" style="text-decoration: none; color: black">
                        <div class="container" align="justify" style="background-color: #C1DDE7; width: 100%; border: solid; border-color: black;">
                            <div class="text-center">
                                <b><font size=5 face="Times New Roman" color="gray">NOSOTROS</font></b>
                                <img src="../imgs/equipoTrabajo.png" width="90%" class="card-img-top" style="border: solid;">
                            </div>
                            <p align="center">
                                <i>
                                    ¡Conoce al equipo de desarrollo!<br>
                                    Conoce a los desarrolladores del sistema, cursantes del noveno semestre de Ingeniería en Sistemas.
                                </i>
                            </p>
                        </div>
                    </a>
                </div>
            </div>
            <br>
        </div>
        </div>
    </font>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.2/dist/umd/popper.min.js" integrity="sha384-IQsoLXl5PILFhosVNubq5LC7Qb9DXgDA9i+tQ8Zj3iwWAwPtgFTxbJ8NT4GN1R8p" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.min.js" integrity="sha384-cVKIPhGWiC2Al4u+LWgxfKTRIcfu0JTxR+EQDz/bgldoEyl4H0zUF0QKbrJ0EcQF" crossorigin="anonymous"></script>

</body>