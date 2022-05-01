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
    <title>Nosotros</title>
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
    <div style="margin-top: 10px; margin-right: 20px; margin-bottom: 10px; margin-left: 20px;">
        <div class="text-center">
            <font size=7 color="black" face="Arial Black">
                Administración de Tecnologías - Grupo#2
            </font>
        </div>
        <br><br>
        <div class="text-justify">
            <font size=3 color="black" face="Arial Black">
                <div align="justify">
                    <div class="row">
                        <div class="col-lg-2 col-md-2 col-sm-4 col-xs-12"></div>
                        <div class="col-lg-4 col-md-4 col-sm-4 col-xs-12">
                            <p>Sara Maria Nataly Ovalle Perez:</p>
                            <img src="../imgs/personNaty.jpg" alt="" style="max-width: 500px; max-height: 500px;">
                        </div>
                        <div class="col-lg-4 col-md-4 col-sm-4 col-xs-12">
                            <p>Johan Estuardo Carrillo Berducido:</p>
                            <img src="../imgs/personJohan.jpg" alt="" style="max-width: 500px; max-height: 500px;">
                        </div>
                        <div class="col-lg-2 col-md-2 col-sm-4 col-xs-12"></div>
                    </div>
                    <div class="row" style="margin-top: 100px;">
                        <div class="col-lg-4 col-md-4 col-sm-4 col-xs-12">
                            <p>Jhensser Andreé Aguirre Galdámez:</p>
                            <img src="../imgs/personJhensser.png" alt="" style="max-width: 500px; max-height: 500px;">
                        </div>
                        <div class="col-lg-4 col-md-4 col-sm-4 col-xs-12">
                            <p>Mario Haroldo Sinay Gaytán:</p>
                            <img src="../imgs/personMario.png" alt="" style="max-width: 500px; max-height: 500px;">
                        </div>
                        <div class="col-lg-4 col-md-4 col-sm-4 col-xs-12">
                            <p>Jorge Luis Muñoz Elías:</p>
                            <img src="../imgs/personJorge.png" alt="" style="max-width: 500px; max-height: 500px;">
                        </div>
                    </div>
                </div>
            </font>
        </div>
        <br>
        <br>
        <div class="row" style="margin-top: 100px;">
            <div class="col-md-4"></div>
            <div class="col-md-4">
                <a href="/proyectos/clinicaAdminTec/views/inicio.php" style="text-decoration: none; color: black">
                    <div class="container" align="justify" style="background-color: #C1DDE7; width: 100%; border: solid; border-color: black;">
                        <div class="text-center">
                            <b><font size=5 face="Times New Roman" color="gray">INICIO</font></b>
                            <img src="../imgs/citaMedica.png" width="90%" class="card-img-top" style="border: solid;">
                        </div>
                        <p align="center">
                            <i>
                                ¡Regresa al inicio!<br>
                                Regresa a la página de inicio de la clínica
                            </i>
                        </p>
                    </div>
                </a>
            </div>
            <div class="col-md-4"></div>
        </div>
        <br>
    </div>
    
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.2/dist/umd/popper.min.js" integrity="sha384-IQsoLXl5PILFhosVNubq5LC7Qb9DXgDA9i+tQ8Zj3iwWAwPtgFTxbJ8NT4GN1R8p" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.min.js" integrity="sha384-cVKIPhGWiC2Al4u+LWgxfKTRIcfu0JTxR+EQDz/bgldoEyl4H0zUF0QKbrJ0EcQF" crossorigin="anonymous"></script>

</body>