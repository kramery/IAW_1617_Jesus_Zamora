<!DOCTYPE html>
<html>
<head>
<meta charset="utf-8">
<meta name="viewport" content="width=device-width, initial-scale=1">

<style>
    table {
        border: 1px solid black;
    }
</style>

</head>
<body>
    <table>
    <?php
    
    $array=[["A"=>1, "B"=>2, "C"=>3], ["D"=>4, "E"=>5, "F"=>6], ["G"=>7, "H"=>8, "I"=>9]];
    $longitud=sizeof($array); // creo una variable que cuente la longitud
    
    for ($i=0; $i<$longitud; $i++) { // Creo un bucle for para crear tantas filas como longitud tenga el array.
            echo "<tr>"; // creo la fila
            foreach ($array[$i] as $m => $n) { // Creo un foreach porque es un array asociativo el que voy a recorrer.
              echo "<td width='50px' height='50px' align='center'>$m:$n</td>"; // Creo las celdas concatenadas con la clave, y el valor para mostra en pantalla.
            } 
            echo "</tr>"; // Cierro fila.
        }
      
    ?>
        
    </table>
    
    
</body>
</html>