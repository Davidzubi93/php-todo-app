<?php
require_once("conexion.php");
try {
    $listaId = filter_input(INPUT_POST, 'listaId', FILTER_VALIDATE_INT);
    if (!$listaId){
        
   
    
    $lista_nombre= $_POST['nombre'];
    $Lista_descripcion= $_POST['descripcion'];
    $listas= $dbh->prepare("INSERT INTO listas (ID, nombre, descripcion) VALUES ($listaId, $lista_nombre,$Lista_descripcion)");
    }
    
    $listas->execute();
    
    //mostrar el mensaje que aparecera en json una vez insertada la lista
    $mensajejson = [
        "mensaje" => "La lista se ha agregado"];
    header('Content-Type: application/json');
    echo json_encode($mensajejson);
}catch (Exception $e){
    print "ERROR!: " .$e->getMessage(). "<br/>";
    die();
}
?>
