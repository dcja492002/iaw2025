<!DOCTYPE html>  
<html lang="es">  
<head>  
    <meta charset="UTF-8">  
    <title>Ejercicio 10 PHP</title>  
</head>  
<body>  

<h1>Ingrese su edad</h1>
<form method="POST">
    <label for="edad">Edad:</label>
    <input type="number" name="edad" id="edad" required>
    <input type="submit" value="¿Qué soy?">
</form>  

<?php  
if ($_SERVER["REQUEST_METHOD"] == "POST") {  
    $edad = (int)$_POST['edad'];
    
    if ($edad >= 18) {
        echo "Eres mayor de edad";
    } else {
        echo "Eres menor de edad";
    }
}
?>

</body>  
</html>  