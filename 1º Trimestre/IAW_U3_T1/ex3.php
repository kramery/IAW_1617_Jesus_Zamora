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
    
        $mes=date("m"); // creo una variable que almacena el numero del mes del sistema.



        if ($mes==8) { // creo una condicion que diga que si la variable contiene el mes 8, muestre un mensaje.
            echo "It's August, so it's really hot.";
        } else { // en caso de no ser el mes 8, muestra otro.
            echo "Not August, so at least not in the peak of the heat.";
        }
    
    ?>
    
</body>
</html>
