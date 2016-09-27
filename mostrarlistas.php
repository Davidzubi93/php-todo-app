<?php
require_once("conexion.php");

try {
    
    $sth = $dbh->prepare("SELECT * from listas;");
    $sth->execute();
     
    $result = $sth->fetchAll(PDO::FETCH_ASSOC); 
    
} catch (PDOException $e) {
    print "Error!: " . $e->getMessage() . "<br/>";
    die();
}