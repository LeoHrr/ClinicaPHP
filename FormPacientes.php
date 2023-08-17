<html>
    <body>
        <h1>Agregar pacientes</h1>
        <form action="Pacientes.php" method=post>
            <label for="dni">Ingrese DNI:</label>
            <input type="text" name="dni" id="dni">
            <label for="nombre">Ingrese Nombre:</label>
            <input type="text" name="nombre" id="nombre">
            <label for="tutor">Ingrese Nombre de Tutor:</label>
            <input type="text" name="tutor" id="tutor">
            <label for="domicilio">Ingrese Domicilio:</label>
            <input type="text" name="domicilio" id="domicilio">
            <label for="celular">Ingrese Celular:</label>
            <input type="number" name="celular" id="celular">
            <input type="submit" value="Agregar">
        </form>
    </body>
</html>