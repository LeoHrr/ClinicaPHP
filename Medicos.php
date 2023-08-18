<html>
    <head>
        <title>Medicos</title>
    </head>
    <body>
        <?php
            include 'Conexion.php';

            class Medicos {
                private $conexionBD;

                public function __construct(){

                    $this->conexionBD = new Conexion(); 
                }

                public function crearMedico($dni, $nombre, $domicilio, $especialidad, $celular, $disponibilidad){
                    $this->conexionBD->Open(); // Abre la conexión

                    $verificar = mysqli_query($this->conexionBD->getConn(),"SELECT dni FROM medicos WHERE dni = '$dni'");
                    if (mysqli_num_rows($verificar) > 0) {
                        echo "Ya existe un médico con el mismo número de DNI.";
                    } else {

                        $registro = mysqli_query($this->conexionBD->getConn(),"INSERT INTO medicos (dni, nombre, domicilio, especialidad, celular, disponibilidad)
                                VALUES ('$dni','$nombre', '$domicilio', '$especialidad', '$celular' ,'$disponibilidad' )") or 
                                die ("Problemas al registrar paciente: " . mysqli_error($this->conexionBD->getConn()));
                                echo "Se agregó el médico correctamente";
    
                        $turno = mysqli_query($this->conexionBD->getConn(),"INSERT INTO turnos (especialidad, dnipaciente, medico, dia, horario)
                                VALUES ('$especialidad','', '$nombre','$disponibilidad','' )") or 
                                die ("Problemas al registrar paciente: " . mysqli_error($this->conexionBD->getConn()));
                    }
                    


                    $this->conexionBD->Close(); // Cierra la conexión
                }

                public function listado(){
                    $this->conexionBD->Open(); // Abre la conexión
            
                    $registro = mysqli_query($this->conexionBD->getConn(), "SELECT nombre, especialidad, disponibilidad FROM medicos") or 
                        die ("Problemas al listar medicos: " . mysqli_error($this->conexionBD->getConn()));

                    while ($reg = mysqli_fetch_array($registro)){
                        echo "Medico: " . $reg['nombre'] . "<br>";
                        echo "Especialidad: " . $reg['especialidad'] . "<br>";
                        echo "Disponibilidad: " . $reg['disponibilidad'] . "<br>";
                        echo "<hr>";
                    }
            
                    $this->conexionBD->Close(); // Cierra la conexión
                }


                public function listaNombre(){
                    $this->conexionBD->Open(); // Abre la conexión
                    
                    $registro = mysqli_query($this->conexionBD->getConn(), "SELECT nombre FROM medicos") or 
                    die ("Problemas al listar medicos: " . mysqli_error($this->conexionBD->getConn()));
                    
                    while ($reg = mysqli_fetch_array($registro)){
                        echo "<option value='" . $reg["nombre"] . "'>" . $reg["nombre"] . "</option>";
                    }
                    
                    $this->conexionBD->Close(); // Cierra la conexión
                }


                public function verificarDisponibilidad($medicoNombre){
                    $this->conexionBD->Open();
    
                    $query = "SELECT disponibilidad FROM medicos WHERE nombre = '$medicoNombre'";
                    $result = mysqli_query($this->conexionBD->getConn(), $query);

                    $disponibilidad = false;
                    if ($result && mysqli_num_rows($result) > 0) {
                        $row = mysqli_fetch_assoc($result);
                        $disponibilidad = strpos($row['disponibilidad'], 'Disponible') !== false;
                    }

                $this->conexionBD->Close();
                return $disponibilidad;
                }

                
            }
    
        ?>
    </body>
</html>