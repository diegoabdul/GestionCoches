<?php	
if(	isset($_REQUEST['Id'])) {
	$id = $_REQUEST['Id'];
	
	if ( is_numeric($id) ) {
		// Tenemos coodenadas validas. A guardar!
		require('dblocalidades.php');
		$delete_query = "DELETE FROM `coordenadas` WHERE `ID` = $id";
		$result = mysqli_query($con, $delete_query);
	}
	else {
		echo "-2";
	}
}
else {
	echo "-3";
}
?>