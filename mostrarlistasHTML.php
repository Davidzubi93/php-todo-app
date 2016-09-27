<?php
require_once("mostrarlistas.php");

//mostrar todas las listas
foreach ($resultado as $resultado){
    print $resultado['ID']."-" . $resultado['nombre'] . "<br/>";
}
?>