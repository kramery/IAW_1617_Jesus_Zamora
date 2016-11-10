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
    
        $array1 = [2,4,6,8];
        $array2 = [7,8,9,10];

    
        $longitud1 = count($array1); // Creo ua variable que guarde el tamaño del array1.
        $longitud2 = count($array2); // Creo ua variable que guarde el tamaño del array2.
    
        $array3 = []; 
    
        for($i=0;$i<$longitud1;$i++) { // Creo un bucle for, que se recorrerá siempre que sea menor que la longitud del array
            
            $array3[] = $array1[$i]; // Añade al array array cada valor que recorre
        }
    
    
        for($x=0;$x<$longitud2;$x++) { // Creo un segundo bucle for que se recorrerá siempre que sea menor que la longitud de este segundo array
            
            $array3[] = $array2[$x]; // Añado cada valor que es recorrido en el nuevo array
        }

        echo var_dump($array3); // Saco por pantalla el array3
    
    ?>
</body>
</html>
