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
    $connection = new mysqli("localhost", "tf", "12345", "tf"); // Me conecto a la base de datos


    if ($connection->connect_errno) { // compruebo que no hay errores
        printf("Connection failed: %s\n", $connection->connect_error);
        exit();
    }
    // Hago que el GET sea un ID
    foreach ($_GET as $key => $codrepara)

      // Verifico que esa reparación no existe ya  
        
      if ($result = $connection->query("select * from reparaciones where IdReparacion=$codrepara;")) {
          
        // BorrO las facturas con ese id de reparación
          
        if ($result2 = $connection->query("delete from facturas where IdReparacion=$codrepara;")) {
            
          // Borro la reparación
            
          if ($result2 = $connection->query("delete from reparaciones where IdReparacion=$codrepara;")) {
              echo "La reparación con ID $codrepara ha sido eliminada de la base de datos.<br>";
            } else {
                mysqli_error($connection);
          }
        } else {
          }
              mysqli_error($connection);
        }
            mysqli_error($connection);
     
     ?>



</body>
</html>

