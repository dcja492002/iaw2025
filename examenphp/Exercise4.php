<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>

    <?php  
        $sum = 0;  

        for ($i = 1; $i <= 100; $i++) {
            if ($i % 5 == 0) {
                echo $i . "\n";
                $sum += $i; 
            }  
        }  

        $cuadrado = $sum * $sum;
        echo "<br>La suma de los múltiplos de 5 es: " . $sum . "\n <br>";
        echo "El cuadrado de la suma es: " . $cuadrado . "\n";
        ?>
</body>
</html>