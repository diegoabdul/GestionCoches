<table>
<tr>
    <th>Borrar</th>
    <th>nº</th> 
    <th>Latitud</th>
	<th>Longitud</th>
	<th>Ver</th>
 </tr>
<?php
	require('dblocalidades.php');

	$sel_query="SELECT * FROM `coordenadas`;";
	$result = mysqli_query($con,$sel_query);
	
	$filas = "";
	while($row = mysqli_fetch_assoc($result)) {
		
		// Opci?n con llamada a funci?n JS borrar. As? est? en ver.
		//$filas .= "<tr>";
		//$filas .= "\t<td><a onclick ='borrar(".$row["ID"].");'>borrar</a></td>";
		
		// Usando manejador de eventos asociado a la clase borrar.
		$filas .= "<tr id='".$row["ID"]."'>";
		$filas .= "\t<td><a class='borrar'>borrar</a></td>";
		
		$filas .= "\t<td>".$row["ID"]."</td>";	
		$filas .= "\t<td>".$row["LATITUD"]."</td>";	
		$filas .= "\t<td>".$row["LONGITUD"]."</td>";	
		$filas .= "\t<td> <a onclick ='ver(".$row["LATITUD"].",".$row["LONGITUD"].");'>ver</a></td>";		
		$filas .= "</tr>\n";
	}
	
	// se devuelve el resultado
	echo utf8_encode($filas);
?>

</table>