<?php
require_once("conexion.php");
$usuario=$_POST['usuario'];
$password=$_POST['password'];

//select usuario
$sqlusuario = "SELECT * FROM usuarios where username=$usuario and password=$password";
$resultadousu = mysql_query($db,$sqlusuario);

$resultadousu->data_seek(0);





while ($lerroa = $resultadousu -> mysql_fetch_asocc()){
        echo "ID".$lerroa["ID"]." - Nombre: " .$lerroa["nombre_usu"]."";
    }





?>
