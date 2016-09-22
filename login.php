<?php
require_once "conexion.php";

$usuario=$_POST['usuario'];
$password=$_POST['password'];

//Crear la conexion

//generar la consulta
$sql="SELECT * FROM TAREAS";
mysqli_set_charset($conexion,"utf8"); //formato de datos utf8

if(!$reslt = mysql_query(conexion, $sql)) die();

$tareas = array(); //crear un array

while($row = mysqli_fetch_array($result)){
        $id=$row['ID'];
        $nombre=$row['nombre'];
        $descripcion=$row['descripcion'];
        $hecho=$row['hecho'];
}

//desconectarnos de la base de datos
$close = mysqli_close($conexion) or die("Ha sucedido un error inesperado");

//Crear el JSON
$json_string = json_encode($tareas);
echo $json_string;

//crear un archivo JSON
$file = 'tareas.json';
file_put_contents($file,$json_string);
/*
//select usuario
$sqlusuario = "SELECT * FROM usuarios where username=$usuario and password=$password";
$resultadousu = mysql_query($db,$sqlusuario);

$resultadousu->data_seek(0);





while ($lerroa = $resultadousu -> mysql_fetch_asocc()){
        echo "ID".$lerroa["ID"]." - Nombre: " .$lerroa["nombre_usu"]."";
    }

*/



?>
