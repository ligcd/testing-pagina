

<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Formulario</title>  
    <link rel="stylesheet" href="estilo.css">
</head>

<body class="cuerpo-formulario">

    <h1 class="titulo-formulario">
        CONTACTO
    </h1>

    <h2 class="inicio-formulario">Responde este formulario para contactarnos</h2>

    <form class="formulario" action="store.php" method="POST">

        <div class="estilo-formulario">

        <label for="nombre"> Nombre: </label>
        <input type="text" id="nombre" name="nombre" required><br>
        <p>  </p>
        <label for="correo">  Correo: </label>
        <input type="mail" id="correo" name="correo" required><br>

        <p> <b>Selecciona tu género</b> </p>
        <label for="femenino"> Femenino </label>
        <input type="radio" id="femenino" value="femenino" name="genero" required><br>
        <label for="masculino"> Masculino</label>
        <input type="radio" id="masculino" value="masculino" name="genero"  required><br>

        <p>  </p>

        <label for="contrasena">Contraseña:</label>
        <input type="password" id="contrasena" name="contrasena" required><br>
        
        <p><b>Escribe tus comentarios para ayudarnos</b></p>
        <textarea if="comentarios" name="comentarios" rows="5" cols="37" required></textarea>

        <p><b>¿De qué ciudad eres?</b> </p>
        <select id="estado" name="estado">
            <option value="guadalajara">Guadalajara</option>
            <option value="tonalá">Tonalá</option>
            <option value="zapopan">Zapopán</option>
            <option value="otros">Otros</option>
        </select><br>

        <p><b>¿Te interesa contratarme? SOLO SELECCIONA UNA OPCIÓN</b></p>
        <label for="opcion">SÍ</label>
        <input type="checkbox" id="si" name="opcion" value="si"><br>
        <label for="opcion">NO</label>
        <input type="checkbox" id="no" name="opcion" value="no"><br> 

        <p>  </p>

        </div>

        <div class="enviar">
        <label for="submit"> <b>ENVIAR DATOS</b></label>
        <p>  </p>
        <input type="submit" value="Enviar">
        </div>


        <p>
        <a href="consultar.php" class="links">CONSULTAR USUARIOS</a>
      </p>
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

    </form>

   

</body>


</html>