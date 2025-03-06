<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Pedido de Panadería</title>
</head>
<body>

<h2>Realizar un pedido con GET</h2>
<form action="" method="get">
    <label for="nombre_get">Nombre:</label>
    <input type="text" id="nombre_get" name="nombre" required>
    <br>
    
    <label for="baguettes_get">Baguettes:</label>
    <input type="number" id="baguettes_get" name="baguettes" min="0" value="0">
    <br>
    
    <label for="panecillos_get">Panecillos:</label>
    <input type="number" id="panecillos_get" name="panecillos" min="0" value="0">
    <br>
    
    <label for="sandwich_get">Pan de sándwich:</label>
    <input type="number" id="sandwich_get" name="sandwich" min="0" value="0">
    <br>

    <button type="submit">Enviar pedido con GET</button>
</form>

<h2>Realizar un pedido con POST</h2>
<form action="" method="post">
    <label for="nombre">Nombre:</label>
    <input type="text" id="nombre" name="nombre" required>
    <br>

    <label for="baguettes">Baguettes:</label>
    <input type="number" id="baguettes" name="baguettes" min="0" value="0">
    <br>

    <label for="panecillos">Panecillos:</label>
    <input type="number" id="panecillos" name="panecillos" min="0" value="0">
    <br>

    <label for="sandwich">Pan de sándwich:</label>
    <input type="number" id="sandwich" name="sandwich" min="0" value="0">
    <br>

    <button type="submit">Enviar pedido con POST</button>
</form>

<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Procesar formulario enviado por POST
    $nombre = htmlspecialchars($_POST['nombre']);
    $baguettes = (int) $_POST['baguettes'];
    $panecillos = (int) $_POST['panecillos'];
    $sandwich = (int) $_POST['sandwich'];

    echo "<h2>Pedido realizado con éxito. Desde el método POST ¡Gracias, $nombre!</h2>";
    echo "<h3>Resumen del pedido:</h3>";
    echo "Baguettes: $baguettes <br>";
    echo "Panecillos: $panecillos <br>";
    echo "Pan de sándwich: $sandwich <br>";

} elseif ($_SERVER["REQUEST_METHOD"] == "GET" && !empty($_GET)) {
    // Procesar formulario enviado por GET (evitando que se ejecute sin datos)
    $nombre = htmlspecialchars($_GET['nombre']);
    $baguettes = (int) $_GET['baguettes'];
    $panecillos = (int) $_GET['panecillos'];
    $sandwich = (int) $_GET['sandwich'];

    echo "<h2>Pedido realizado con éxito. Desde el método GET ¡Gracias, $nombre!</h2>";
    echo "<h3>Resumen del pedido:</h3>";
    echo "Baguettes: $baguettes <br>";
    echo "Panecillos: $panecillos <br>";
    echo "Pan de sándwich: $sandwich <br>";
}
?>

</body>
</html>
