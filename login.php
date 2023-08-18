<?php
include 'Conexion.php';


$conexion = new Conexion();
$conn = $conexion->getConn();


$usuario = $_POST["usuario"];
$contrasena = $_POST["contrasena"];


$query = "SELECT * FROM administradores WHERE usuario='$usuario' AND contrasena='$contrasena'";
$resultado = mysqli_query($conn, $query);

if (mysqli_num_rows($resultado) === 1) {
    echo "Inicio de sesión exitoso!";
} else {
    echo "Credenciales incorrectas";
}


$conexion->Close();
?>
