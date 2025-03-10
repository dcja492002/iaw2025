<!DOCTYPE html>  
<html lang="es">  
<head>  
    <meta charset="UTF-8">  
    <title>Registrar Compra</title>  
</head>  
<body>  
    <h1>Registrar Nueva Compra</h1>  
    <form action="insertar_compra.php" method="post">  
        <label for="matricula">Matrícula del Vehículo:</label>  
        <input type="text" id="matricula" name="matricula" required>  
        
        <label for="dni">DNI del Usuario:</label>  
        <input type="text" id="dni" name="dni" required>  
        
        <input type="submit" value="Registrar Compra">  
    </form>  
    <a href="form_usuario.php">Registrar Usuario</a>  
    <a href="form_vehiculo.php">Registrar Vehículo</a>  
</body>  
</html>  