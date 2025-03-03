<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Ejercicio 12</title>
</head>
<body>
    <?php 
    $host = 'localhost';
    $usuario = 'tu_usuario';
    $contraseña = 'tu_contraseña';
    $bbdd = 'alumnos';

    $conexion = new mysqli($host, $usuario, $contraseña, $bbdd);  

    if ($conn->connect_error) {  
        die("Error de conexión: " . $conexion->connect_error);  
    }  

    echo "Conexión exitosa a la base de datos '$bbdd'.";
    $conexion->close();
    ?>
</body>
</html>