<html>
    <head></head>
    <body>
    <h1>Agregar medicos</h1>
        <form action="FormMedicos.php" method="post">
            <label for="dni">Ingrese DNI:</label>
            <input type="text" name="dni" id="dni">
            <label for="nombre">Ingrese Nombre:</label>
            <input type="text" name="nombre" id="nombre">
            <label for="domicilio">Ingrese Domicilio:</label>
            <input type="text" name="domicilio" id="domicilio">
            <label for="especialidad">Especialidad:</label>
            <input type="text" id="especialidad" name="especialidad">
            <label for="celular">Ingrese Celular:</label>
            <input type="number" name="celular" id="celular">
            <label for="disponibilidad">Ingrese Disponibilidad:</label>
            <input type="text" name="disponibilidad" id="disponibilidad">
            <input type="submit" value="Agregar">
        </form>
        <?php
        include 'Medicos.php';

        $medicos = new Medicos();

        if ($_SERVER["REQUEST_METHOD"] == "POST") {
            $dni = $_POST["dni"];
            $nombre = $_POST["nombre"];
            $domicilio = $_POST["domicilio"];
            $especialidad = $_POST["especialidad"];
            $celular = $_POST["celular"];
            $disponibilidad = $_POST["disponibilidad"];
    

            $medicos->crearMedico($dni, $nombre, $domicilio, $especialidad, $celular, $disponibilidad);
        }
        ?>


    </body>
</html>
