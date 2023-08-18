<!DOCTYPE html>
<html>
<head>
    <title>Iniciar Sesión</title>
</head>
<body>
    <h2>Iniciar Sesión</h2>
    <form action="login.php" method="post" onsubmit="redirigir()">
        <label for="usuario">Usuario:</label>
        <input type="text" name="usuario" required><br>
        <label for="contrasena">Contraseña:</label>
        <input type="password" name="contrasena" required><br>
        <button type="submit">Iniciar Sesión</button>
    </form>
    <script>
        function redirigir() {
            window.location.href = "index.php"; 
        }
    </script>
</body>
</html>
