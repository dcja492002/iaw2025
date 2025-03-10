<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>

    <?php
        require 'conexion.php';
        $result = mysqli_query($conn, "SELECT * FROM usuarios");
        while ($row = mysqli_fetch_assoc($result)) {
            echo "ID: " . $row['id'] . " - Nombre: " . $row['nombre'] . " - Email: " . $row['email'] . "<br>";
        }
    ?>
</body>
</html>