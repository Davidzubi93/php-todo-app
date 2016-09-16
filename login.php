<?php
$conex=mysql_connect((conexion.php));
$usuario=$_POST['usuario'];
$password=$_POST['password'];

//select usuario
$queryusuario = "SELECT * FROM usuario where nombre_usu='$usuario' and password='$password'";
$resultadousu= mysql_query($queryusuario);

//select tarea
$querytarea="SELECT * FROM lista";
$resultadota=mysql_query($querytarea);

if (mysqli_num_rows > 0){
    //lerro bakoitzeko edukia bistaratzeko
    while ($lerroa = mysql_fetch_assoc($resultadousu)){
        echo "id: " .$lerroa["lista_id"]. " - Usuario: " .$lerroa["nombre_usu"]. "<br>";
    }
}else{
    echo "0 result";
}


?>
