<?php
require_once('conexion-php');

$nombre = $_POST['nom'];
$descripcion = $_POST['descrip'];
//query = consulta
$query = "INSERT INTO tareas VALUES(,$nombre,$descripcion)";

$insert_tareas=mysql_query($query) or die ("Ha fallado el insert");

header("location:select_tareas.php");



?>