<html>
    <head>
        <title>Medicos</title>
    </head>
    <body>
        <?php
            include 'Conexion.php';

            class Medicos {
                // private $Dni;
                // private $Nombre;
                // private $Domicilio;
                // private $Especialidad;
                // private $Celular;
                // private $Disponibilidad;
                private $conexionBD;

                public function __construct(){
                    // $this->Dni = $dni;
                    // $this->Nombre = $nombre;
                    // $this->Domicilio = $domic;
                    // $this->Especialidad = $especialidad;
                    // $this->Celular = $cel;
                    // $this->Disponibilidad = $horario;

                    $this->conexionBD = new Conexion(); 
                }

                public function listado(){
                    $this->conexionBD->Open(); // Abre la conexión
            
                    $registro = mysqli_query($this->conexionBD->getConn(), "SELECT nombre, especialidad, disponibilidad FROM medicos") or 
                        die ("Problemas al listar medicos: " . mysqli_error($this->conexionBD->getConn()));

                    while ($reg = mysqli_fetch_array($registro)){
                        echo "Medico: " . $reg['nombre'] . "<br>";
                        echo "Especialidad: " . $reg['especialidad'] . "<br>";
                        echo "Disponibilidad: " . $reg['disponibilidad'] . "<br>";
                    }
            
                    $this->conexionBD->Close(); // Cierra la conexión
                }
            }

            $medicos = new Medicos();
            $medicos->listado();
        ?>
    </body>
</html>