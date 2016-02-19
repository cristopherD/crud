<?php
//Este fichero enlazado con index.php permite borrar
// incluir la conexión a la base de datos
include 'conexion.php';
// coger el parámetro que nos permitirá identificar el registro
// isset() es una función PHP usado para verificar si una variable tiene valor o no
$id = isset($_GET['id']) ? $_GET['id'] : die('ERROR: Registro no encontrado.');
// Consulta de borrado
$query = "DELETE FROM clientes WHERE id = ?";
$stmt = $conexion->prepare($query);
$stmt->bind_param('i', $id);
if ($stmt->execute()) {
// después de borrar ir a index.php de nuevo e
// informar que el archivo fue borrado
header('Location: index.php?action=deleted');
} else {
die('Imposible borrar el registro.');
}
?>
