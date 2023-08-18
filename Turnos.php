<?php
include 'Medicos.php';


$conexion = new Conexion();

function altaTurno() {
    global $conexion;

    $conexion->Open();

    $nombreMedico = $_POST["nombre"];
    $horario = $_POST["horario"];

    $registros = mysqli_query($conexion->getConn(), "UPDATE turnos SET horario='$horario' WHERE medico='$nombreMedico'") or
    die("Problemas al seleccionar turno: " . mysqli_error($conexion->getConn()));

    $conexion->Close();
}

altaTurno();

header("Location: AgregarTurnos.php"); // Redirige de nuevo al formulario
?>
