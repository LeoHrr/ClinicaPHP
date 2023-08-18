<?php
include 'Medicos.php';

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $medicoNombre = $_POST["medico"];

    $medicos = new Medicos();

    
    if ($medicos->verificarDisponibilidad($medicoNombre)) {
        // Agregar el turno a la base de datos
        // Aquí puedes implementar el proceso de agregar el turno a la base de datos
        
        echo "Turno agregado para el médico $medicoNombre.";
    } else {
        echo "El médico $medicoNombre no tiene disponibilidad de turnos.";
    }
}
?>
