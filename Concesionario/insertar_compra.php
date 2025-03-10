<?php 
error_reporting(E_ALL);  
ini_set('display_errors', 1);  
 
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
$dni = $_POST['dni'];  

// Preparar y vincular  
$stmt = $conn->prepare("INSERT INTO Compras (Matricula, DNI) VALUES (?, ?)");  
$stmt->bind_param("ss", $matricula, $dni);  

// Ejecutar  
if ($stmt->execute()) {  
    // Obtener el precio del vehículo  
    $precio_sql = $conn->prepare("SELECT Precio FROM Vehiculos WHERE Matricula = ?");  
    $precio_sql->bind_param("s", $matricula);  
    $precio_sql->execute();  
    $resultado = $precio_sql->get_result();  
    $vehiculo = $resultado->fetch_assoc();  

    if ($vehiculo) {  
        $precio = $vehiculo['Precio'];  
        // Mostrar resumen de la compra  
        echo "Compra registrada correctamente. <br>";  
        echo "Matrícula: " . $matricula . "<br>";  
        echo "DNI: " . $dni . "<br>";  
        echo "Precio del Vehículo: €" . number_format($precio, 2) . "<br>";  
    } else {  
        echo "No se encontró el vehículo con la matrícula proporcionada.";  
    }  
} else {  
    echo "Error: " . $stmt->error;  
}  

// Cerrar conexión  
$stmt->close();  
$precio_sql->close();  
$conn->close();  
?> 