<?php
include ("conexion.php");
$usuario=$_POST['usuario'];

$select_usuarios = "SELECT password from usuarios WHERE usuario=$usuario";
$datos_select=mysql_query($select_usuarios);

session_start();
$_SESSION['usuario']=$usuario;

while($row=mysql_fetch_row($datos_select)){
    $pass=$row[0];}
if($_POST['password']==$pass){
    header("location:mostrarlistasHTML.php");
}else{
    header("location:login.html");}



?>
