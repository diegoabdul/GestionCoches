<?php	
if(	isset($_REQUEST['Latitud']) && isset($_REQUEST['Longitud'])) {
	$lat = $_REQUEST['Latitud'];
	$lon = $_REQUEST['Longitud'];
	
	if ( is_numeric($lat) && is_numeric($lon) ) {
		if (( $lat >= -180 && $lat<=180 ) &&
			( $lon >= -180 && $lon<=180 ) ) {
				
				// Tenemos coodenadas validas. A guardar!
				
				require('dblocalidades.php');
				$insert_query=
				"INSERT INTO `coordenadas` (`LATITUD`, `LONGITUD`) ".
				"VALUES ('$lat', '$lon');";
				$result = mysqli_query($con,$insert_query);
		}
		else {
			echo "-1";
		}
	}
	else {
		echo "-2";
	}
}
else {
	echo "-3";
}
?>