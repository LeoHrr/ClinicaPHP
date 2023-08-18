<!DOCTYPE html>
<html>
<head>
    <title>Barra de Búsqueda de Médicos</title>
</head>
<body>
    <h1>Nombre de medico</h1>
    <form action="AgregarTurno.php" method="post">

        <select name="medico" id="">
        <?php
            include 'Medicos.php';
        
            $medicos= new Medicos();
            $medicos->listaNombre();
        ?>
        </select>
        <button type="submit">Agregar Turno</button>
    </form>
</body>
</html>
