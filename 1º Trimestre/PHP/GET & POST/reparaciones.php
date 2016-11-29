<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
  </head>
  <body>
    <table border="1px solid black">
     <thead>  <!-- Aquí creo en encabezado de la tabla, con el nombre de las columnas de la tabla
                    reparaciones --> 
       <tr>
         <th>IdReparacion</th>
         <th>Matricula</th>
         <th>FechaEntrada</th>
         <th>KM</th>
         <th>Avería</th>
         <th>FechaSalida</th>
         <th>Reparado</th>
         <th>Observaciones</th>
         <th>Empleados</th>
         <th>Información reparacion</th> <!-- creo una celda más para hacer una columna que muestre informacion de la reparacion--> 
         <th>Borrar</th><!-- Creo otra columna más para borrar las reparaciones --> 
      </thead>
    <?php
      
      $connection = new mysqli("localhost", "tf", "12345", "tf"); //Realizo la conexión a la base de datos.
        
      if ($connection->connect_errno) { //Compruebo que se ha conectado bien a la base de datos.
          printf("Connection failed: %s\n", $connection->connect_error);
          exit();
      }
      // Guardo en la variable result una consulta a la base de datos para sacar 
      // todas las columnas de la tabla reparaciones
      if ($result = $connection->query("SELECT * FROM REPARACIONES;")) {
      } else {
      // En caso de error saco la salida del error.
            echo "Error: " . $sql . "<br>" . mysqli_error($connection);
      }
      // Bajo el encabezado de la tabla muestro las columnas de la consulta a la base de datos
      // almacenado en result
          while($obj = $result->fetch_object()) {
              echo "<tr>";
              echo "<td>".$obj->IdReparacion."</td>";
              echo "<td>".$obj->Matricula."</td>";
              echo "<td>".$obj->FechaEntrada."</td>";
              echo "<td>".$obj->Km."</td>";
              echo "<td>".$obj->Averia."</td>";
              echo "<td>".$obj->FechaSalida."</td>";
              echo "<td>".$obj->Reparado."</td>";
              echo "<td>".$obj->Observaciones."</td>";
              
              // Creo otra celda que será un enlace, que tomará como ruta el archivo 
              // asignar_empleados.php?id=, pasándo como parámetro mediante get el id de la reparación.
              
              echo "<td><form id='form4' width = '50px' method='get'>
                    <a href='asignar_empleados.php?id=$obj->IdReparacion'>
                      <img src='foto.png' width='30%';/>
                    </a></form></td>";
              
              // Para la reparación seleccionada mostrará, como en la celda anterior, mediante get a 
              // mostrar_piezas.php pasándole como parámetro el id de la reparación.
              
              
              echo "<td><form action ='mostrar_piezas.php?id=$obj->IdReparacion'
               id='form1' method='get'>
                <input id='b1' type='submit' name = '$obj->IdReparacion'
                value='Mostrar'; />
              </form></td>";
              
              // Como en la celda anterior, realizo un delete a la base de datos desde el archivo borrar.php,   pasándole mediante get el id de la reparación.
              
              echo "<td><form id='form0' method='get'>
                          <a href='borrar.php?id=$obj->IdReparacion'>
                            <img src='borrar.png' width='30%';/>
                          </a>
                        </form></td>";
              echo "</tr>";
          }
          
          $result->close(); // Cierro la consulta
          unset($obj);

          unset($connection); // Cierro la conexión
          ?>
     <br>
   </table>
  </body>
</html>
