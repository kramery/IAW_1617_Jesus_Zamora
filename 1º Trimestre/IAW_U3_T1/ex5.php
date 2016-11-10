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

        $filas=10; // creo una variable por el valor de 10
        $celdas=10;// creo una variable por el valor de 10


        echo "<table border='1px solid black'>"; // creo una tabla con un borde

        for ($y=1;$y<=$filas;$y++) { // creo un bucle for que cree las 10 columnas de la varible
            echo "<tr>"; // abro etiqueta de las columna
                for ($x=1;$x<=$celdas;$x++) { // creo un bucle que cree las celdas
                        if($y%2 == 0) { // establezco una condicion en la cual si es par hace una cosa, en caso de ser impar, que haga otra, respecto a las filas
                            echo "<td style='background-color:white; width:50px; height:50px;'></td>"; // si es par pintara las celdas de color blanco
                        } else {
                            echo "<td style='background-color:black; width:50px; height:50px;'></td>";// si es impar pintara las celdas de color negro
                        }
                }
            echo "</tr>"; // cierro etiquetas de columna
            }   
        echo "</table>"; // cierro la tabla 
    ?>
</body>
</html>