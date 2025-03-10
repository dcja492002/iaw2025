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
$dni = $_POST['dni'];  
$nombre = $_POST['nombre'];  
$apellidos = $_POST['apellidos'];  
$telefono = $_POST['telefono'];  
$correo = $_POST['correo'];  

// Preparar y vincular  
$stmt = $conn->prepare("INSERT INTO Usuarios (DNI, Nombre, Apellidos, Telefono, Correo_Electronico) VALUES (?, ?, ?, ?, ?)");  
$stmt->bind_param("sssss", $dni, $nombre, $apellidos, $telefono, $correo);  

// Ejecutar  
if ($stmt->execute()) {  
    echo "Nuevo usuario registrado correctamente. <a href='form_compra.php'>Ir a registrar compra</a>";  
} else {  
    echo "Error: " . $stmt->error;  
}  

// Cerrar conexión  
$stmt->close();  
$conn->close();  
?>  