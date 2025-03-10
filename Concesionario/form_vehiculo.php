<!DOCTYPE html>  
<html lang="es">  
<head>  
    <meta charset="UTF-8">  
    <title>Registrar Vehículo</title>  
</head>  
<body>  
    <h1>Registrar Nuevo Vehículo</h1>  
    <form action="insertar_vehiculo.php" method="post">  
        <label for="matricula">Matrícula:</label>  
        <input type="text" id="matricula" name="matricula" required>  
        
        <label for="marca">Marca:</label>  
        <input type="text" id="marca" name="marca" required>  
        
        <label for="modelo">Modelo:</label>  
        <input type="text" id="modelo" name="modelo" required>  
        
        <label for="precio">Precio:</label>  
        <input type="number" step="0.01" id="precio" name="precio" required>  
        
        <input type="submit" value="Registrar Vehículo">  
    </form>  
    <a href="form_usuario.php">Registrar Usuario</a>  
    <a href="form_compra.php">Registrar Compra</a>  
</body>  
</html>  