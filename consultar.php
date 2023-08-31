<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
<?php
include('conexion.php');
            //------------------------------------//
            //--- Aplicable a Sentencia SELECT ---//
            $sql = "SELECT * FROM persona";
            $stmt = $conn->prepare($sql);
            $stmt->execute();

            // Configura los resultados como un arreglo asociativo
            $stmt->setFetchMode(PDO::FETCH_ASSOC);
            
            // $stmt->fetchAll() Obtiene el arreglo asociativo
            echo "<ul>";
            foreach ($stmt->fetchAll() as $row) {
                echo "<li>". $row['id'] . " - " . $row['nombre'] . " " . $row['correo'] . " " . $row['estado'] . " " . $row['contrasena'] . " " . $row['genero'] . " " . $row['opcion'] . "</li>";
            }
            echo "</ul>";
 ?>    

</body>
</html>