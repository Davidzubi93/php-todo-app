<?php
require_once("mostrarlistas.php");

//mostrar todas las listas
 print "<table border='1'>";
    print "<tr>";
    print "<th>ID</th>";
    print "<th>Nombre</th>";
    print "<th>Acciones</th>";
    print "</tr>";
foreach ($result as $resultado){
    print "<tr>";
    print "<td>".$resultado['ID']."</td>";
    print "<td>".$resultado['nombre']."</td>";
    print "<td><a href='select_tareas.php'>Mostrar contenido</a><br/><a href='delete_listas.php'>Eliminar lista</a></td>";
    print "</tr>";
}
print "</table>";
print "<a href='addlistasHTML.php'>Add lista</a>";
?>