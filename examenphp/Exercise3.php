<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Ejercicio 3 PHP</title>
</head>
<body>
    <?php  
    $numero = 1;  
    $sumaTotal = 0;  

    while ($numero <= 50) {  
        $cuadrado = $numero * $numero;  
        echo "El cuadrado de $numero es $cuadrado<br>";  
        $sumaTotal += $cuadrado;  
        $numero++;  
    }  

    echo "La suma total de los cuadrados del 1 al 50 es: $sumaTotal";  
    ?>  
</body>
</html>