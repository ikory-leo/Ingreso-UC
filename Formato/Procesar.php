<?php

$enlace= mysqli_connect('localhost','root','mysql2017','datosdeusuarios',3306);

$cadena="SELECT * FROM `datosdeusuarios`.`usuarioycontraseña`
       WHERE `Usuario`='".$_REQUEST['Usuario']."'  AND
        `Contraseña`='".$_REQUEST['Contraseña']."'";
$resultado= mysqli_query($enlace, $cadena);
if (mysqli_num_rows($resultado)) {
    echo "Adentro!!!";
}else{
    echo "Afuera!!!";
}