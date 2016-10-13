<?php
require_once('conexion.php');

$nombre = $_POST['nom'];
$descripcion = $_POST['descrip'];
$hecho = $_POST['hecho'];

//
$get=mysql_query("SELECT MAX(ID) FROM tareas"); 
$got = mysql_fetch_array($get); 
$next_id = $got['MAX(ID)'] + 1;

//query = consulta
$query = "INSERT INTO tareas VALUES($next_id,'$nombre','$descripcion','$hecho',1)";
echo $query;
//$insert_tareas=mysql_query($query,$dbh) or die ("Ha fallado el insert");


//header("location:select_tareas.php");



?>