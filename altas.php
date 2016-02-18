<?php

/* 
*El objetivo de este fichero es añadir un nuevo registro a nuestra tabla clientes.
 */
?>
<html>
<head>
<meta charset="UTF-8">
<title>Añadir Cliente</title>
</head>
<body>
<h1>Alta Cliente</h1>
<?php
if($_POST){
//conexion a la base de datos de aqui se obtiene la variable $conexion
    include 'conexion.php';
//insertar consulta(query)
    $query ="REPLACE INTO clientes"
            ."SET nif=?,nombre=?,apellido1=?,apellido2=?,"
            ."email=?,telefono=?,"
            ."usuario=?,password=?";
    echo $query,"<br>";
//preparar consulta para ejecutar, aqui se comprueba la sintaxis de la consulta
    if($stmt=$conexion->prepare($query)){
        echo "<div>registro preparado =)</div>";
    }else{
        die('Imposible preparar el registro.'.$conexion->error);
    }
//asociar los datos a los parametros
    $stmt->bind_param('ssssssss',$_POST['nif'],$_POST['nombre'],$_POST['apellido1'],$_POST['apellido2'],
            $_POST['email'],$_POST['telefono'],$_POST['usuario'],$_POST['password']);
//Ejecutar la consulta
    if($stmt->execute()){
        echo "<div>Registro guardado. </div>";
    }else{
        die('Imposible guardar el registro: '.$conexion->error);
    }
  }
?>
<form action='altas.php' method='post'>
<table border='0'>
<tr>
<td>NIF</td>
<td><input type='text' name='nif' /></td>
</tr>
<tr>
<td>Nombre</td>
<td><input type='text' name='nombre' /></td>
</tr>
<tr>
<td>1er Apellido</td>
<td><input type='text' name='apellido1'></textarea></td>
</tr>
<tr>
<td>2o Apellido</td>
<td><input type='text' name='apellido2'></textarea></td>
</tr>
<tr>
<td>login</td>
<td><input type='text' name='login' /></td>
</tr>
<tr>
<td>email</td>
<td><input type='text' name='email' /></td>
</tr>
<tr>
<td>telefono</td>
<td><input type='text' name='telefono' /></td>
</tr>
<tr>
<td>usuario</td>
<td><input type='text' name='usuario' /></td>
</tr>
<tr>
<td>password</td>
<td><input type='text' name='password' /></td>
</tr>
</table>
</form>
</body>
</html>
