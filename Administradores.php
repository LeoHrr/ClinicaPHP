<html>
    <head></head>
    <body>
        <?php
            class Administrador{
                private $Usuario;
                private $Contraseña;

                public function __construct($user, $passw){
                    $this->Usuario=$user;
                    $this->Contraseña=$passw;
                }
            }
        ?>
    </body>
</html>