<?php 
    
    $solicitud = "";
    $departamento = "";
    $fecha = "";
    $estado = "";
    $equipo = "";
    //Asignacion
    if(isset($_POST['solicitud'])){
        $solicitud =$_POST['solicitud'];
    }
    
    if(isset($_POST['fecha'])){
        $fecha =$_POST['fecha'];
    }
    if(isset($_POST['departamento'])){
        $departamento =$_POST['departamento'];
    }
    
    if(isset($_POST['estado'])){
        $estado =$_POST['estado'];
    }
    if(isset($_POST['equipo'])){
        $equipo =$_POST['equipo'];
    }
    
    //Validacion
    if($solicitud!="" && $departamento!="" && $fecha!="" && $estado!="" && $equipo!="" )
    {   
        include '../config.php';
        
        $sql = "INSERT INTO `solicitud` values (NULL,'$solicitud','$equipo','$departamento','$fecha', '$estado')";
        if($resultado=mysqli_query($conexion, $sql))
        {
            header("Location: ../solicitud.php");    
        }
        else{
            echo "Error al ejecutar el script<br>".mysqli_error($conexion)."<br>";
        }

    }else{
        echo "falto datos";
    }