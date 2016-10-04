<?php
include ("conexion.php");
$usuario=$_POST['usuario'];
$password=$_POST['password'];
$select_usuarios = "SELECT password from usuarios WHERE username='".$usuario."' and password='".$password."'";
$datos_select=mysql_query($select_usuarios,$db);

session_start();
$_SESSION['usuario']=$usuario;

/*while($row=mysql_fetch_row($datos_select)){
    $pass=$row[0];}*/
if($mysql_num_rows($datos_select)!=0){
    header("location:mostrarlistasHTML.php");
}else{
    header("location:login.html");}



?>
