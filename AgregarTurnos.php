<!DOCTYPE html>
<html>
<head>
    <title>Formulario</title>
</head>
<body>
    <a href="menuMedicos.php">Menú Anterior</a>
    <h1>Formulario</h1>
    <form action="Turnos.php" method="post" id="turno">
        <select name="nombre" id="nombre">
            <?php
            include 'Medicos.php';
        
            $medicos = new Medicos();
            $medicos->listaNombre();
            ?>
        </select>
        <label for="horario">Horario:</label>
        <input type="time" id="horario" name="horario" required><br>

        <button type="submit">Agregar</button>
    </form>
    <?php
        $medicos = new Medicos();
        $medicos->listado();
    ?>

    <script>
        const formulario = document.getElementById("turno");
        formulario.addEventListener("submit", function(event) {
            event.preventDefault();
            try {
                alert("Turno agregado");
                formulario.submit();
            } catch (error) {
                alert("Ocurrió un error al cargar los datos. Por favor, inténtalo nuevamente.");
            }
        });
    </script>
</body>
</html>
