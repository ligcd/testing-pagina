<?php       
include('conexion.php');

            $nombre = $_POST['nombre'];
            $correo = $_POST['correo'];
            $contrasena = $_POST['contrasena'];
            $genero = $_POST['genero'];
            $comentarios = $_POST['comentarios'];
            $estado = $_POST['estado'];
            $opcion = $_POST['opcion'];
            //--- Aplicable a Sentencias INSERT, UPDATE, DELETE ---//
            $sql = "INSERT INTO persona (nombre, correo, contrasena, genero, estado, comentarios, opcion)
            VALUES ('$nombre', '$correo', '$contrasena', '$genero', '$estado', '$comentarios', '$opcion')";
            var_dump($sql);
            // Utilizar exec() dado que no se regresan resultados
            $conn->exec($sql);
            header('location: formulario.php');
            
            //------------------------------------//
            //--- Aplicable a Sentencia SELECT ---//
    ?>

