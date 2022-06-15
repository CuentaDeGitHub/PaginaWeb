<?php
include('DB2.php');
$_tabla = $_POST['tabla'];
$query = "SELECT * FROM ".$_tabla;
$result = mysqli_query($conexion, $query) or die("database error:". mysqli_error($conexion));
$records = array();
while( $rows = mysqli_fetch_assoc($result) ) {
	$records[] = $rows;
}	
if(isset($_POST["export_csv_data"])) {	
	$csv_file = "phpzag_csv_export_".date('Ymd') . ".csv";			
	header("Content-Type: text/csv");
	header("Content-Disposition: attachment; filename=\"$csv_file\"");	
	$fh = fopen( 'php://output', 'w' );
	$is_coloumn = true;
	if(!empty($records)) {
	  foreach($records as $record) {
		if($is_coloumn) {		  	  
		  fputcsv($fh, array_keys($record));
		  $is_coloumn = false;
		}		
		fputcsv($fh, array_values($record));
	  }
	   fclose($fh);
	}
	exit;  
}
?>