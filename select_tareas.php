<?php
include("conexion.php");

//hacer la consulta
$result = mysql_query("SELECT * FROM tareas ORDER BY ID");

//mostrar el resultado
echo "<table";
echo "<tr>";
echo "<th>Nombre</th>";
echo "<th>Descripcion</th>";
echo "<th>Hecho</th>";
echo "</tr>";
//recorrer el array y mostrar los datos en la tabla
while ($lerroa= mysql_fetch_row($result)){   
    echo "<tr>";  
    echo "<td>$lerroa[0]></td>";  
    echo "</tr>";  
}  
echo "</table>";

?>