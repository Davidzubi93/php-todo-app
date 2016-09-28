<?php
require_once("conexion.php");
try {
    $listaId = filter_input(INPUT_POST, 'listaId', FILTER_VALIDATE_INT);
    if (!$listaId){
        
   
    
    $lista_nombre= $_POST['nombre'];
    
    $listas= $add->prepare("INSERT INTO listas (ID, nombre) VALUES ($listaId, $lista_nombre)");
    }
    
    $listas->execute();
    
    //mostrar el mensaje que aparecera en json una vez insertada la lista
    $mensajejson = [
        "mensaje" => "La lista esta añadida"];
    header('Content-Type: application/json');
    echo json_encode($mensajejson);
}catch (Exception $e){
    print "ERROR!: " .$e->getMessage(). "<br/>";
    die();
}
?>
