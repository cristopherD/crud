<?php

/* 
este fichero realizará la conexión a la base de datos
 * Toma los valores del fichero config.php
 */

include 'config.php';
$conexion = new mysqli($$DB_HOST, $DB_USER, $DB_PASSWORD, $DB_NAME);
if ($conexion->connect_errno){
//si se produce algun error finaliza con mensaje de error
    dir("Error de Conexion:" .$conexion->connect_errno);
}
$conexion->set_charset("utf8");
