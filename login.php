<?php
include 'Conexion.php';

$conexion = new Conexion();
$conexion->Open();
$conn = $conexion->getConn();

$usuario = $_POST["usuario"];
$contraseña = $_POST["contraseña"];

$query = "SELECT * FROM administradores WHERE usuario='$usuario' AND contraseña='$contraseña'";
$resultado = mysqli_query($conn, $query);

if ($resultado && mysqli_num_rows($resultado) === 1) {
    echo "Inicio de sesión exitoso!";
    header("Location: menuMedicos.php");
    exit();
} else {
    echo '<script>alert("Credenciales incorrectas");</script>';
}

$conexion->Close();
?>
