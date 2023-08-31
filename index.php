<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Práctica de html y css</title>  
    <link rel="stylesheet" href="estilo.css">
</head>

<body class="cuerpo-index"> 

<header>
    <h1 class="titulo-index">
         Lilia del Carmen González González
    </h1>

    <div class="perfil">
    <img src="perfil.jpg" alt="foto-perfil">
    </div>

</header>
    <div class="nav">
        <b>¿QUÉ ENCONTRARÁS?</b> 
      <p>
        <a href="index.php" class="links">Página principal</a>
      </p>

      <p>
        <a href="formulario.php" class="links">Formulario</a>
      </p>
    </div>
    
    <h2 class="me">
        Acerca de mi. . .
    </h2>

    <p class="me2">
        Me llamo Lilia, tengo 22 años y soy estudiante de la carrera 
        de ingeniería informática aquí en la Universidad de Guadalajara. Me gusta leer, 
        los videojuegos pero sobre me encantan las películas, soy fanática de las películas
        me considero hábil para escribir historias de fantasía y soy feliz con películas de comedia.
        Me gusta mi ciudad, así que al estar en un camión o un carro me gusta ver las casas e imaginar
        a las personas que viven ahí y si son felices o no. Me considero alguien sensible, 
        social, muy habladora pero también me gusta la soledad de vez en cuando. 
    </p>

    <h3 class="conocimientos">
        Mis conocimientos. . . 
    </h3>

    <p class="conocimientos2">
        Hasta ahora tengo algunos conocimientos de los siguientes lenguajes y programas:

        <ul style="font-size: 18px;">Lenguaje c</ul>
        <img  src="lenguaje.jpg" alt="informática"  style="display: block; margin: 0;  width: 350px; height: auto; float:right">
        <ul style="font-size: 18px;">Lenguaje c++</ul>
        <ul style="font-size: 18px;">Phyton</ul>
        <ul style="font-size: 18px;">PHP</ul>
        <ul style="font-size: 18px;">PostgreSQL</ul>
        <ul style="font-size: 18px;">Cisco Packet Tracer</ul>

    </p>

    <h4 class="fortalezas">
        Mis fortalezas . . . 
    </h4>

    <p class="fortalezas2">
        <img  src="fortalezas.png" alt="informática"  style="display: block; margin: 0;  width: 300px; height: auto; float:right">
        <ol style="font-size: 18px;" > <b>1</b> No me rindo con facilidad</ol>
        <ol style="font-size: 18px;"> <b>2</b> Busco formas de mejorar</ol>
        <ol style="font-size: 18px;"> <b>3</b> Intento aprender de mis errores</ol>
        <ol style="font-size: 18px;"> <b>4</b> Soy responsable de mis acciones</ol>
        
    </p>

    <h5 class="proyectos">
        Proyectos realizados
    </h5>

    
        <table class="tabla" border="4">
            
            <tr>
                <th>Nombre de proyecto</th>
                <th>Lenguaje</th>
                <th>Descripción</th>
            </tr>

            <tr class="contenido-tabla">
                <th>Reproductor de música</th>
                <th>C++</th>
                <th>Realizamos un reproductor de música que funcionaba en codeblocks
                    en donde se reproducía música automáticamente si la buscabas
                    en el programa o reproducias en aleatorio. Fue uno de mis primeros proyectos 
                    de la carrera
                </th>
            </tr>
            <tr class="contenido-tabla">
                <th>Página web de cine mexicano</th>
                <th>PHP</th>
                <th>Junto con mi compañera y amiga realizamos una página web 
                    conectada a una base de datos creada en PostgreSQL en donde 
                    los usuarios podían registrarse, buscar películas, ver listados completos 
                    de películas mexicanas y además encontrar escuelas así como cines en sus estados. 
                    Fue uno de los proyectos más grandes de mi carrera.
                </th>
            </tr>

            <tr class="contenido-tabla">
                <th>Simulación de conexiones entre dispositivos</th>
                <th>Cisco Packet Tracer</th>
                <th>Como proyecto final de la materia de redes en equipo 
                    tuvimos que realizar una conexión correcta entre computadoras 
                    y redes en oficinas de diferentes estados de la republica, 
                    configurando con con un DNS cada ip de cada estado y además
                    simulando también un ambiente de oficinas en cada estado, agregando 
                    dispositivos inteligentes y teléfonos que fueran funcionales. 
                </th>
            </tr>
        </table>

        <h5 class="persona">
            Persona a la que admiro . . . 
        </h5>
        <div class="imagen-contenedor">
            <img src="emma.jpg" alt="Emma Stone" class="persona-imagen"/>
        </div>

        <p class="descripcion-persona">
            <b>Emma Stone</b> es una actriz estadounidense que ha incursionado en en mundo de 
            la actuación y producción. Ha aparecido en películas como el increíble hombre araña, 
            La la land y Cruella. La admiro porque es mi actriz favorita y siempre se ha superando 
            trayendo a la pantalla grande actuaciones que siempre me han cautivado. Quizás en otra vida 
            me hubiera gustado estudiar actuación de manera profesional como ella.  
        </p>

        <a href="https://es.wikipedia.org/wiki/Emma_Stone" class="link-wiki" >
            Más información sobre ella </a>

            <p class="contacto"> <b>CONTÁCTAME</b> </p>

        <div class="footer">
           <b>CORREO ELECTRÓNICO</b> 
           <p>
            <a class="link-wiki" href="mailto: lilia.gonzalez0624@alumnos.udg.mx">
                lilia.gonzalez0624@alumnos.udg.mx
            </a>
            </p>
             <p>
                <b>MIS REDES</b>
             </p>
             
            
             <p class="instagram">
             <a href="https://www.instagram.com/ligcg/?hl=es-la">
                <img class="instagram2" src="instagram.png" alt="instagram">
             </a>

            <p class="facebook">
                <a href="https://www.facebook.com/lili.gonzalez.58152">
                    <img class="facebook2" src="facebook.png" alt="facebook">
                 </a>
            </p>



             
            </p>

           


        </div>
    
        


</body>
</html>