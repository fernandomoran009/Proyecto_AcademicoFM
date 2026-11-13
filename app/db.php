<?php
#archivo que establesca la conexion entre mysql y config.php

#tarea 1: cargar configuracion
$config = require __DIR__ . '/config.php';
# tarea 2: construir el data sourse Name (DSN)
#aqui contiene el controlador , el host, el puerto, badedatos, codificacion
$dsn = 'mysql:host={$config['host']};' 
    . 'port={$config['port']};'
    'dbname={$config['database']};
    'charset=utf8m64';

#tarea 3 configuracion del PDO
#ERRMORE_EXCEPTION: 
#permite manejar los errores mediante excepciones.

