<?php
include "conexion.php";

$usuario=$_POST['usuario'];
$password=$_POST['password'];

//select usuario
$queryusuario = "SELECT * FROM usuario where nombre_usu='$usuario' and password='$password'";
$resultadousu= $mysqli->query($queryusuario);




while ($lerroa = mysql_fetch_array($resultadousu)){
        echo  $lerroa["nombre_usu"]."";
    }





?>
