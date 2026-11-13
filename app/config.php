<?php
/*
* Plantilla de configuración para conectar a la base de datos MySQL.
*/

# Establecer la dirección del servidor mysql
$host = '127.0.0.1'; // Corregido: era &host
$puerto = '3306';

# Nombre de la base de datos
$baseDatos = 'Proyecto_Academico';

# Usuario de ejemplo en MySQL
$usuario = 'Academico_user'; // Corregido: Faltaba el punto y coma (;)

# Definimos una contraseña de administrador 
$contrasena = '123456789';

# Retornar estos valores como un arreglo asociativo
return [
    'host'     => $host,       // Corregido: era &host
    'port'     => $puerto,     // Corregido: era &puerto
    'database' => $baseDatos,  // Corregido: era &baseDatos
    'username' => $usuario,    // Corregido: era &usuario
    'password' => $contrasena  // Corregido: era &contrasena
];