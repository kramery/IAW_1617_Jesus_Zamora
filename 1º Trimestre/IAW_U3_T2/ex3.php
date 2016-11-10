<!DOCTYPE html>
<html lang="">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title></title>
    <link rel="stylesheet" href="">
</head>

<body>
    <?php
    
        $array = [56,77,199,21,34,123,43];
    
        $longitud = count($array); // Calculo la longitud del array.
    
        $maximo = $array[0]; // Le asigno al array el valor 0.
    
    
        for($i=1;$i<$longitud;$i++) { // Creo un bucle for que inicio a 1 y que se recorrerá siempre que sea menor que la longitud del array.
            
            if ($array[$i]>$maximo) { // Creo un bucle if, si el valor del array es mayor que el de la variable $maximo.
                
                $maximo= $array[$i]; // Guardo como nuevo valor de $maximo.
            }
        }
    echo $maximo; // Muestro por pantalla el resultado.
    
    ?>
</body>
</html>
