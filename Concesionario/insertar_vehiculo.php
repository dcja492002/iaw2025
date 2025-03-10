<?php  
$servername = "localhost"; // Cambia esto si tu servidor es diferente  
$username = "joseantonio"; // Tu nombre de usuario de MariaDB  
$password = "usuario"; // Tu contraseña de MariaDB  
$dbname = "Concesionario"; // Nombre de tu base de datos  

// Crear conexión  
$conn = new mysqli($servername, $username, $password, $dbname);  

// Comprobar conexión  
if ($conn->connect_error) {  
    die("Error de conexión: " . $conn->connect_error);  
}  

// Recibir datos del formulario  
$matricula = $_POST['matricula'];  
$marca = $_POST['marca'];  
$modelo = $_POST['modelo'];  
$precio = $_POST['precio'];  

// Preparar y vincular  
$stmt = $conn->prepare("INSERT INTO Vehiculos (Matricula, Marca, Modelo, Precio) VALUES (?, ?, ?, ?)");  
$stmt->bind_param("sssd", $matricula, $marca, $modelo, $precio);  

// Ejecutar  
if ($stmt->execute()) {  
    echo "Nuevo vehículo registrado correctamente. <a href='form_compra.php'>Ir a registrar compra</a>";  
} else {  
    echo "Error: " . $stmt->error;  
}  

// Cerrar conexión  
$stmt->close();  
$conn->close();  
?>