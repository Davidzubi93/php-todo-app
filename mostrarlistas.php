<?php
include("conexion.php");

try {
    
    $sth = $dbh->prepare("SELECT * from listas;");
    $sth->execute();
     
    $result = $sth->fetchAll(PDO::fetch_assoc); 
    print_r($result);
        
    
} catch (PDOException $e) {
    print "Error!: " . $e->getMessage() . "<br/>";
    die();
}