<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>

    <?php
        $server = "localhost";
        $user = "root";
        $password = "";
        $database = "biblioteca";

        $conn = mysqli_connect($server, $user, $password, $database);
        if (!$conn) {
            die("Conexión fallida: " . mysqli_connect_error());
        }
    ?>

</body>
</html>