<html>
    <head></head>
    <body>
        
        <?php
            include 'Conexion.php';

            class Pacientes{
                // private $Dni;
                // private $Nombre;
                // private $NombreTutor;
                // private $Domicilio;
                // private $Celular;
                private $ConexioBD;

                public function __construct($dni, $nombre, $nomTutor, $domic, $cel){
                    // $this->Dni=$dni;
                    // $this->Nombre=$nombre;
                    // $this->NombreTutor=$nomTutor;
                    // $this->Domicilio=$domic;
                    // $this->Celular=$cel;

                    $this->conexionBD = new Conexion(); 
                }

                public function Agregar(){
                    $this->conexionBD->Open(); // Abre la conexión

                    $registro = mysqli_query($this->conexionBD->getConn(), "INSERT INTO pacientes(dni, nombre, tutor, domicilio, celular) VALUES ('$_REQUEST[dni]', '$_REQUEST[nombre]','$_REQUEST[tutor]','$_REQUEST[domicilio]', '$_REQUEST[celular]')") or 
                        die ("Problemas al registrar paciente: " . mysqli_error($this->conexionBD->getConn()));


                    $this->conexionBD->Close(); // Cierra la conexión
                }
                public function CrearHistoria(){
                    
                }
                
            }
            $pacientes= new Pacientes("","","","","");
            $pacientes->Agregar();
        ?>
    </body>
</html>