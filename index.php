<?php 
    echo "SOY UNA SUPER APLICACION";
    phpinfo();
    $conexion = new mysqli(getenv("DB_IP"),getenv("DB_USUARIO"),getenv("DB_PASSWORD"),getenv("DB_NOMBRE"));