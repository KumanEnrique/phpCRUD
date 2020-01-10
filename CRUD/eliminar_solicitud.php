<?php
	include '../config.php';
    mysqli_set_charset($conexion, "utf8");
    if ($conexion)
        {}
    else {
        echo "Error al ejecutar el script<br>".mysqli_error($conexion)."<br>";
        echo "El script utilizado fue: $query<br>";
        }
		
		$id=$_GET['id'];

		$sql="DELETE FROM `solicitud` WHERE id='$id' ";
		if($resultado=mysqli_query($conexion, $sql))
		{
			header("Location: ../solicitud.php");	
		}
		else{
			echo "Error al ejecutar el script<br>".mysqli_error($conexion)."<br>";
        }
	?>