
<?php
            //recibe todos los datos del form//

    $nombre=$_POST[nombre];
    $apellido=$POST[apellido];
    $direccion=$_POST[direccion];
   
    $usuario=$POST[usuario];
    $clave=$POST[clave];

    echo "Los datos son los siguientes: <br>";
    echo "$nombre, $apellido,$direccion, $telefono, $usuario y $clave";


    
     // configuracion necesaria para acceder a la DB.
     function conn() {
    $hostname = "localhost";
    $usuariodb = "root";
    $passworddb ="";
        $dbname = "proyecto";


        // generando la conexion con el servidor
        $conectar= mysqli_connect($hostname, $usuariodb, $passworddb, $dbname);
        return $conectar;

    }

    