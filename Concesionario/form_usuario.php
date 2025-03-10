<!DOCTYPE html>  
<html lang="es">  
<head>  
    <meta charset="UTF-8">  
    <title>Registrar Usuario</title>  
</head>  
<body>  
    <h1>Registrar Nuevo Usuario</h1>  
    <form action="insertar_usuario.php" method="post">  
        <label for="dni">DNI:</label>  
        <input type="text" id="dni" name="dni" required>  
        
        <label for="nombre">Nombre:</label>  
        <input type="text" id="nombre" name="nombre" required>  
        
        <label for="apellidos">Apellidos:</label>  
        <input type="text" id="apellidos" name="apellidos" required>  
        
        <label for="telefono">Teléfono:</label>  
        <input type="text" id="telefono" name="telefono" required>  
        
        <label for="correo">Correo Electrónico:</label>  
        <input type="email" id="correo" name="correo" required>  
        
        <input type="submit" value="Registrar Usuario">  
    </form>  
    <a href="form_vehiculo.php">Registrar Vehículo</a>  
    <a href="form_compra.php">Registrar Compra</a>  
</body>  
</html>  