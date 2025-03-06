<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Ejercicio 2</title>
</head>
<body>
    <?php
    $sumaAcumulada = 0;

    for ($i = 1; $i <= 100; $i++) {

        if ($i % 2 == 0) {
            echo "Número par: $i\n<br>";
            $sumaAcumulada += $i;
        }
    }

    echo "La suma acumulada de los números pares del 1 al 100 es: $sumaAcumulada\n";
    ?>
</body>
</html>