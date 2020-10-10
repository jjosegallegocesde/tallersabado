<?php

include("Basedatos.php");

if(isset($_POST["botonEnviar"])){

    $nombre=$_POST["nombre"];

    $operacion= new BaseDatos();

    $consulta="INSERT INTO usuarios(nombre) VALUES ('$nombre')";

    $operacion->alterarBaseDatos($consulta);

    
}


?>