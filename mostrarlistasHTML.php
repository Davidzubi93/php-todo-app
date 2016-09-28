<?php
require_once("mostrarlistas.php");

//mostrar todas las listas
 print "<table border='1'>";
    print "<tr>";
    print "<th>ID</th>";
    print "<th>Nombre</th>";
    print "</tr>";
foreach ($result as $resultado){
    print "<tr>";
    print "<td>".$resultado['ID']."</td>";
    print "<td>".$resultado['nombre']."</td>";
    print "</tr>";
}
print "</table>";
?>