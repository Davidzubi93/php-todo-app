<?php
include ("conexion.php");
$usuario=$_POST['usuario'];
$password=$_POST['password'];
        $bad_strings = array("\b", "\0", "\n", "\r", "\t", "\z",
		     "/n", "/0", "/n", "/r", "/t", "/z",
		     "$", "'", '"', "%", ";", "_", "*", 
		     "`", "drop table");
		$usuario = str_replace($bad_strings, "", $usuario); //Avoid SQL Injection
		$password = str_replace($bad_strings, "",$password); //Avoid SQL Injection
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
