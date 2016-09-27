<?php
require_once("conexion.php");

try {
    $listaId = filter_input(INPUT_GET, 'listaId', FILTER_VALIDATE_INT);
    
    if(empty($listaId)) {
        $listas_tareas = $dbh->prepare('SELECT listas.ID as listaID, listas.nombre as listaNombre, tareas.ID as tareasID, tareas.nombre as tareasNombre,tareas.descripcion as tareasDescripcion
            FROM listas, tareas WHERE listas.ID = tareas.ID_listas');
    } else {
        $listas_tareas = $dbh->prepare('SELECT listas.ID as listaID, listas.nombre as listaNombre, tareas.ID as tareasID, tareas.nombre as tareasNombre, tareas.descripcion as tareasDescripcion
            FROM listas, tareas WHERE listas.ID = tareas.ID_listas AND listas.ID = :listaId');
        
        $listas_tareas->bindParam(':listaId', $listaId);    
    }
    
    $listas_tareas->execute();
    $resultado= $listas_tareas->fetchAll(PDO::FETCH_ASSOC);
    
    foreach($resultado as $tareas) {
        print $tareas['tareasID'] . "-" .$tareas['tareasNombre']. "-" .$tareas['tareasDescripcion']."<br/>";
    }
}catch (PDOException $e) {
    print "Error!: " . $e->getMessage() . "<br/>";
    die();
}

?>