<?php

/* 
Este fichero tiene parametros necesarios para conectar a la base de datos del proyecto.
 */

$DB_HOST = "localhost";
$DB_USER = "root";
$DB_PASSWORD = "Ausias";
$DB_NAME = "crud";
// Para que el numero de intentos de logeo sean 4 en dos horas
$intentos_login = 5;
$tiempo_fuerzabruta = 2; //horas
$secure = false; //por defecto no obligar a https
$default_action = 'lista';