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
            $contador = 1; // creo un contador que lo defino a 1.
            while ($contador < 10){ // hago que llegue hasta 10, para que se imprima en pantalla 9 veces.
              echo 'abc '; // Pinto en pantalla abc
              $contador++; // incremento para que vaya llegando a 10.
            }

            echo "<br/>";
            echo "<br/>";

            $contador1 = 1; // creo un contador que lo defino a 1.
            do{
              echo 'xyz '; // Pinto en pantalla xyz
              $contador1++; // incremento para que vaya llegando a 10.
            } while ($contador1 < 10) ; // hago que llegue hasta 10, para que se imprima en pantalla 9 veces.

            echo "<br/>";
            echo "<br/>";

            for ($i=1; $i<10; $i++){ // creo un bucle for en el que inicio la variable i en 1 para que llegue hasta el número menos que 10, con incremento.
              echo "$i "; // escribo además un espacio para que al pintar los números se vean mejor.
            }


            echo "<ol>"; // creo una lista ordenada
            for ($letra='A'; $letra<'G'; $letra++){ // creo un bucle que vaya de la letra A a la G, con un incremento.
              echo "<li>Item $letra</li>"; // pinto en pantalla un nivel de la lista
              }
            echo "</ol>"; // cierro la lista ordenada.
        ?>
    
</body>
</html>
