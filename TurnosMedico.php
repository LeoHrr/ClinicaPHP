<!DOCTYPE html>
<html>
<head>
    <title>Barra de Búsqueda de Médicos</title>
</head>
<body>
    <a href="BuscarPor.php">Atras</a>
    <h1>Nombre de medico</h1>
    <form action="TurnosMedico.php" method="post">

        <select name="medico" id="medico">
        <?php
        
            include 'Medicos.php';
        
            $medicos= new Medicos();
            $medicos->listaNombre();

        ?>
        </select>
        <button type="submit">Consultar Turno</button>
        <?php
        if ($_SERVER["REQUEST_METHOD"] == "POST") {
            $medicoNombre = $_POST["medico"];
            $medicos = new Medicos();
            $medicos->verificarDisponibilidad($medicoNombre);
        }
            ?>
            <form action="ConfirmarTurno.php" method="post">
                <label for="dni">Ingrese DNI para confirmar turno</label>
                <input type="text" name="dni">
                <label for="medico">Medico:</label>
                <input type="text" name="medico">
                <button type="submit">Confirmar</button>
            </form>
            

            <?php
            
                // function agregarDni(){

                //     $conexion->Open();
                //     $dni = $_POST["dni"];
                    
                //     $query = "SELECT dni FROM pacientes WHERE dni = '$dni";
                //     $result = mysqli_query($conexion->getConn(), $query);
    
                //     if ($result){
                //         $registros = mysqli_query($conexion->getConn(), "UPDATE turnos SET dnipaciente='$dni' WHERE medico='$medicoNombre'") or
                //         die("Problemas al seleccionar turno: " . mysqli_error($conexion->getConn()));
    
                        
                //     }else {
                //          echo "error";
                //     }
                //     $conexion->Close();
                // }
            ?>



        
        
        
    </form>
</body>
</html>
