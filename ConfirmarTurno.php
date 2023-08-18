<?php
    include 'Medicos.php';


    $conexion = new Conexion();
    function validardni(){
        global $conexion;

        $conexion->Open();

        $dni = $_REQUEST["dni"];
        $nombreMedico = $_REQUEST["medico"];

        $query = "SELECT dni FROM pacientes WHERE dni = '$dni";
        $result = mysqli_query($conexion->getConn(), $query);
        if($result){
            $row = mysqli_fetch_assoc($result);
            $dnip = $row['dnipaciente'];
            
        
            $registros = mysqli_query($conexion->getConn(), "UPDATE turnos SET dnipaciente='$dnip' WHERE medico='$nombreMedico'") or
            die("Problemas al seleccionar turno: " . mysqli_error($conexion->getConn()));

        }else{
            echo "Antes de pedir turno debe completar sus datos";
            echo '<a href="FormPacientes.php">Click para completar sus datos</a>';
        }
    }
    
    
    validardni();
?>