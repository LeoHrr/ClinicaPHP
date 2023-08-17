<?php
class Conexion {
    private $conn;

    public function Open() {
        $this->conn = mysqli_connect("localhost", "root", "", "clinica");
        if ($this->conn === false) {
            die("Error connecting to MySQL: " . mysqli_connect_error());
        }
    }

    public function Close() {
        mysqli_close($this->conn);
    }

    public function getConn() {
        return $this->conn;
    }
}
?>


<!-- agregué un método getConn() para obtener la conexión en el objeto 
Conexion y lo usé en el archivo Medicos.php para realizar consultas. 
También cambié la variable $conn a una propiedad $conn dentro de la 
clase Conexion para que esté disponible en todos los métodos. -->