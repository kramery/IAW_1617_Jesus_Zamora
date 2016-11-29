 <!DOCTYPE html>
 <html lang="en">
   <head>
     <meta charset="utf-8">
     <meta name="viewport" content="width=device-width, initial-scale=1.0">

   </head>
   <body>
    <table style="border:1px solid black">
     <thead> <!-- Creo un encabezado a la tabla -->
       <tr>
         <th>IdRecambio</th>
         <th>Descripción</th>
         <th>UnidadBase</th>
         <th>Stock</th>
         <th>PrecioReferencia</th>
     </thead>
        
     <?php
    
     // El contenido de get pasará a tener un valor unico, el numero de reparación
        
     foreach($_GET as $variable  => $codrepara)
         
     echo "La reparacion seleccionada tiene el ID $variable.<br><br>";
        
     echo "Los recambios usados son: <br><br>";

       $connection = new mysqli("localhost", "tf", "12345", "tf"); // Creo la conexión a la base de datos

       if ($connection->connect_errno) {
           printf("Connection failed: %s\n", $connection->connect_error);
           exit();
       }
        
      // Realizo la consulta para obtener los recambios de esa reparacion
        
       if ($result = $connection->query("select recambios.* FROM recambios join incluyen
       on recambios.IdRecambio=incluyen.IdRecambio
       where incluyen.IdReparacion = $variable;")) {
           
         // Introduzco los datos de las columnas en las tablas
           
       while($obj = $result->fetch_object()) {
           echo "<tr>";
           echo "<td>".$obj->IdRecambio."</td>";
           echo "<td>".$obj->Descripcion."</td>";
           echo "<td>".$obj->UnidadBase."</td>";
           echo "<td>".$obj->Stock."</td>";
           echo "<td>".$obj->PrecioReferencia."</td>";
           echo "</tr>";
         }
           
         // Cierro el resultado y tabla
           
         $result->close();
         unset($obj);
         echo "</table>";

       } else {
             mysqli_error($connection);
       }
        
       // Creo una tabla donde voy a mostrar los empleados que han intervenido en esa reparación
        
       echo "<br><br>Empleados asignados: <br>";
    
       echo "<br> <table style='border:1px solid black'>
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
         </thead>";
        
        // Hago la consulta para ver los trabajadores que han intervenido
        
         if ($result = $connection->query("SELECT empleados.* FROM empleados join intervienen
         on empleados.CodEmpleado=intervienen.CodEmpleado
         where intervienen.IdReparacion = $variable;")) {
             
         // Los añado a la tabla
             
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
             echo "</tr>";
           }
           $result->close();
           unset($obj);
             
  
           echo "</table></form> "; // Cierro la tabla
         } else {
               mysqli_error($connection);
         }
        
        ?>
  </form>
   </body>
 </html>
