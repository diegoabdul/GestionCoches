<?php
	require('dblocalidades.php');

	$sel_query="SELECT * FROM `coordenadas`;";
	$result = mysqli_query($con,$sel_query);

	// Se va a generar un JSON con la la info:
	// [ {id: id1, latitud:lat1, longitud:lon1}, ... {id:id2, latitud:lat2, longitud:lon2}]
	
	$json = "[ "; // se deja espacio para que al quitar ?ltimo car?cter no rompa si no hay resultados
	while($row = mysqli_fetch_assoc($result)) { 
		$json = $json.'{"id":'.$row["ID"].
						',"latitud":'.$row["LATITUD"].
						',"longitud":'.$row["LONGITUD"].'},'; 
	}
	$json = substr($json, 0, -1)."]"; // se quita la ?ltima coma y se cierra el array
	
	// se devuelve el resultado
	echo utf8_encode($json);
?>