<!DOCTYPE html>
<html>
<head>
    <title>Formulario</title>
</head>
<body>
    <h1>Formulario</h1>
    <form action="Turnos.php" method="post" id="turno">
        <label for="nombre"> Nombre:</label>
        <input type="text" id="nombre" name="nombre" required><br>
        
        <label for="horario">Horario:</label>
        <input type="time" id="horario" name="horario" required><br>
        
        <button type="submit">Agregar</button>
    </form>

    <script>
        const formulario = document.getElementById("turno");
        formulario.addEventListener("submit", function(event) {
            event.preventDefault();
            try {
                alert("Turno agregado");
                setTimeout(function() {
                    history.back();
                }, 2000);
            } catch (error) {
                alert("Ocurrió un error al cargar los datos. Por favor, inténtalo nuevamente.");
            }
        });
    </script>
</body>
</html>
