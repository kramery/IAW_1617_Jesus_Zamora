<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

  </head>
  <body>
    
  <?php

    $connection = new mysqli("localhost", "tf", "12345", "tf"); // Me conecto a la base de datos

    if ($connection->connect_errno) {
        printf("Connection failed: %s\n", $connection->connect_error);
        exit();
    }
    
    foreach ($_GET as $key => $codrepara) // Creo un foreach en donde el array get pasará a ser el ID de la reparación
        
    echo "A continuación se muestra la reparación del ID $codrepara:<br><br>";
    // Creo el encabezado de una tabla
      echo "<form method='post' name='asignar'/><table style='border:1px solid black'>
       <thead>
         <tr>
           <th>CodEmpleado</th>
           <th>DNI</th>
           <th>Nombre</th>
           <th>Apellidos</th>
           <th>Telefono</th>
           <th>CP</th>
           <th>FechaAlta</th>
           <th>Categoría</th>
           <th>Asignar</th>
       </thead>";
       // Hago la misma consulta que el la pagina anterior pero para mostrar la tabla empleados
        if ($result = $connection->query("select * from empleados;")) {
        while($obj = $result->fetch_object()) {

          echo "<tr>";
          echo "<td>".$obj->CodEmpleado."</td>";
          echo "<td>".$obj->DNI."</td>";
          echo "<td>".$obj->Nombre."</td>";
          echo "<td>".$obj->Apellidos."</td>";
          echo "<td>".$obj->Telefono."</td>";
          echo "<td>".$obj->CP."</td>";
          echo "<td>".$obj->FechaAlta."</td>";
          echo "<td>".$obj->Categoria."</td>";
          
          // Creo un input de tipo checkbox con el valor del ID del empleado en la misma fila que él
            
          echo "<td><input type='checkbox' name='asignar[]' value=".$obj->CodEmpleado."> </td>";
          echo "</tr>";
            
        }
            
        // Cierro la consulta para la base de datos
            
        $result->close();
            
        // Cierro la conexión
            
        unset($obj);
            
        // Cierro la tabla y creo un input de tipo submit
            
        echo "</table><br><input type='submit' name='boton' value='Asignar empleados'/>
        </form>";
            
      } else {
            
            mysqli_error($connection);
            
      }
    
      // Accion de boton enviar
      
    if (isset($_POST['boton'])) {
      echo "<br>El empleado o empleados ";
        
      // Recorro todos los chekbox y su valor
        
      foreach ($_POST['asignar'] as $key => $codemple) {
          
      // Hago un update a la base de datos en la tabla reparaciones, donde inserto el codigo de empleado y a reparación
          
        $connection->query("INSERT INTO Intervienen VALUES ($codemple,$codrepara,'0');");
        echo "$codemple, ";
        }
        echo "asignados a la reparación Nº $codrepara";
        }
     ?>
 </body>
</html>
