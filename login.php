<?php
include ("conexion.php");
$usuario=$_POST['usuario'];
$password=$_POST['password'];



//select usuario
$sqlusuario = "SELECT * FROM usuarios where username=$usuario and password=$password";
$resultadousu = mysql_query($sqlusuario);


for ($num_fila = $resultadousu->num_rows - 1; $num_fila >= 0; $num_fila--) {
    $resultado->data_seek($num_fila);
    $lerroa = $resultado->fetch_assoc();
  echo "ID".$lerroa["ID"]." - Nombre: " .$lerroa["nombre_usu"]."";
}



?>
