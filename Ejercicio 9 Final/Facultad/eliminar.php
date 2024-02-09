<?php
	include "conexion.php";

	extract($_GET);

	if(@$idborrar==2845){
	
	 
	
		$sqlborrar="DELETE FROM profesores WHERE idempleados=$idempleados";
	
		$resborrar=mysqli_query($conexion,$sqlborrar);
	}
?>

<script type="text/javascript">
	alert("Producto Eliminado exitosamente");
	window.location.href='index.php';
</script>
