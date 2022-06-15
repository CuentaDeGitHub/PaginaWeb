<?php
include('DB2.php');
$_tabla = $_POST['tabla'];
$sql_query = "SELECT * FROM ".$_tabla;
$resultset = mysqli_query($conexion, $sql_query) or die("database error:". mysqli_error($conexion));
$registros = array();

while( $rows = mysqli_fetch_assoc($resultset) ) {
	$registros[] = $rows;
}

if(isset($_POST["export_data"])) {	
	$filename = "sv_data_export_".date('Ymd') . ".xls";			
	header("Content-Type: application/vnd.ms-excel");
	header("Content-Disposition: attachment; filename=\"$filename\"");	
	$show_coloumn = false;
	if(!empty($registros)) {
	  foreach($registros as $record) {
		if(!$show_coloumn) {
		  echo implode("\t", array_keys($record)) . "\n";
		  $show_coloumn = true;
		}
		echo implode("\t", array_values($record)) . "\n";
	  }
	}
	exit;  
}
?>