
<?php 

                
$id = "";
$solicitud = "";
$departamento = "";
$fecha = "";
$estado = "";
$equipo ="";

//Asignacion
if(isset($_POST['departamento'])){
    $departamento =$_POST['departamento'];
}

if(isset($_POST['fecha'])){
    $fecha =$_POST['fecha'];
}
    if(isset($_POST['solicitud'])){
    $solicitud =$_POST['solicitud'];
}

if(isset($_POST['estado'])){
    $estado =$_POST['estado'];
}
    
if(isset($_POST['id'])){
    $id =$_POST['id'];
}
if(isset($_POST['equipo'])){
    $equipo =$_POST['equipo'];
}
    //Insercion
    include '../config.php';
    $sql = "UPDATE `solicitud` SET solicitud='$solicitud',equipo='$equipo',departamento='$departamento',fecha='$fecha' ,estado='$estado' WHERE id = $id ";
    if($resultado=mysqli_query($conexion, $sql))
    {
        header("Location: ../solicitud.php"); 
        //echo 'se  actualizo'
    }
    else{
        echo "Error al ejecutar el script<br>".mysqli_error($conexion)."<br>";
    }
?>