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
    
    $array = ["A","B","C","D"];
    
    $longitud = count($array); // saco el numero de elementos
    echo "<ul>"; // creo una lista desordenada
    for($i=$longitud-1; $i>=0; $i--)  // saco el valor de cada elemento
        {
        
        echo "<li>$array[$i]</li>"; // saco el valor de cada elemento dentro de un item de la lista desordenada
        
        }
    echo "</ul>"; // cierro la lista desordenada
    
    ?>
    
</body>
</html>
