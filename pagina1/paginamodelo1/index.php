<?php include ("header.php") ?>
     <?php
        echo '<span> <h1>🏛️ <u>  Curso Universitario de Programacion Backend  </u> 🏛️</h1> <span>';

        print "<p>¡Bienvenido a nuestro curso de programación backend con PHP, HTML y CSS!
En este curso, aprenderás las habilidades necesarias para convertirte en un experto en programación de backend y crear aplicaciones web dinámicas y poderosas. Nuestro enfoque se centra en PHP, el lenguaje de programación más popular para el backend, así como en HTML y CSS para crear interfaces de usuario atractivas y responsivas.

Durante el curso, cubriremos una amplia gama de temas, desde los fundamentos de PHP y el manejo de datos hasta la integración de bases de datos y la creación de APIs. A través de lecciones prácticas y ejercicios, tendrás la oportunidad de aplicar tus conocimientos y desarrollar proyectos reales.<p>"; 
       /*  Se procede a realizar los comentarios correspondientes.

                ¡CADA UNIDAD TENDRA SU CALIFICACION!

            - PROCEDEMOS:
       Desarrollamos las distintas unidades y su contenido.
       Cursada 2023 - Comienzo 15 de Septiembre 2023.*/
       
        echo '<h3>   🎆 Unidad 1 </h3>';
        print '<h4> - Introduccion a PHP </h4>';
        print '<h4> - PPT: Introduccion PHP </h4>'; 
        print '<h4> - Actividad sugerida (OPCIONAL) </h4>';
        print '<h4> - Presentacion con HTML y PHP </h4>'; 
      

        
        //VARIABLES
            
        #Curso 1
        $titulo= ' 🥇Curso de PHP.';
        $programas_curso = 2 ;
        $precioA = 14230.78 ;
        $precio_curso = number_format($precioA, 2,',','.');
        

        $responsable= 'Hernan Jose Rodriguez.';
        $fecha= '25/09/2023';
        $tiempo_cursado= 127;

        #Curso 2
        $titulo2= ' 🥇Curso de HTML.';
        $programas_curso2 = 2;
        $precioB = 12655.63;
        $precio_curso2 = number_format($precioB, 2,',','.');
        $responsable2= 'Victor Gaston Martins.';
        $fecha2= '25/09/2023';
        $tiempo_cursado2= 120;

        #Curso 3
        $titulo3= ' 🥇Curso de CSS.';
        $programas_curso3 = 1;
        $precioC = 16528.45;
        $precio_curso3 = number_format($precioC, 2,',','.');
        $responsable3= 'Stella Maria Gasparotti.';
        $fecha3= '25/09/2023';
        $tiempo_cursado3= 110;

        $preciofinal = ($precioA + $precioB + $precioC)
     ?>
 
            <?php #SECCION CONDICION DEL ALUMNO ?>

        <section class ="contenido">
          <div class="curso_1"> 
          <h2> <?php  echo $titulo ?> </h2>
          <ul>  
                <li> Instalacion de programas: <?php  echo $programas_curso ?>  </li>               
                <li> Precio:  $ <?php  echo $precio_curso ?>  </li>
                <li> Responsable: <?php  echo $responsable ?> </li>
                <li> Horas de cursado: <?php  echo $tiempo_cursado ?> Hs  </li>
                <li> Fin de cursado: <?php  echo $fecha ?> </li>
          </ul>

          </div>

          <?php
        echo '<h3>   🎆 Unidad 2 </h3>';
        print '<h4> - Introduccion a HTML </h4>';
        print '<h4> - PPT: Introduccion HTML </h4>'; 
        print '<h4> - Actividad sugerida (OPCIONAL) </h4>';
        print '<h4> - Presentacion con HTML y CSS </h4>';
        ?> 
      
          <div class="curso_2">
          <h2> <?php  echo $titulo2 ?> </h2>
          <ul>  
                <li> Instalacion de programas: <?php  echo $programas_curso2 ?>  </li>               
                <li> Precio: $ <?php  echo $precio_curso2 ?>  </li>
                <li> Responsable: <?php  echo $responsable2 ?> </li>
                <li> Horas de cursado : <?php  echo $tiempo_cursado2 ?> Hs </li>
                <li> Fin de cursado: <?php  echo $fecha2 ?> </li>
          </ul>
          </div>

          <?php
        echo '<h3>   🎆 Unidad 3 </h3>';
        print '<h4> - Introduccion a CSS </h4>';
        print '<h4> - PPT: Introduccion CSS </h4>'; 
        print '<h4> - Actividad sugerida (OPCIONAL) </h4>';
        print '<h4> - Presentacion con HTML, PHP Y CSS </h4>';
        ?> 

          <div class="curso_3">
          <h2> <?php  echo $titulo3 ?> </h2>
          <ul>  
                <li> Instalacion de programas: <?php  echo $programas_curso3 ?>  </li>               
                <li> Precio: $<?php  echo $precio_curso3 ?>  </li>
                <li> Responsable: <?php  echo $responsable3 ?> </li>
                <li> Horas de cursado : <?php  echo $tiempo_cursado3 ?> Hs  </li>
                <li> Fin de cursado: <?php  echo $fecha3 ?> </li>
          </ul>

          </div>

          <?php  
      

          #PROGRESO
          
          $promedio_cursos= ($preciofinal) ;
          $total_horas = ($tiempo_cursado + $tiempo_cursado2 + $tiempo_cursado3) ;
          
          $promedio_horas = (($tiempo_cursado + $tiempo_cursado2 + $tiempo_cursado3)/3) ;
          $titulo3 = "🙂 Resumen - Curso de Programacion Backend:  "
          
          ?>

          <?php 
          echo '<h3>   🎆 ¡Tu Consulta no es molestia! </h3>';
          print '<h4> - A continuacion se presenta un resumen para el alumno con respecto a los cursos dictados por la catedra.</h4>';
          
          ?>

           <div class="Resultados">
           <h5> <?php  echo $titulo3 ?> </h5>
           <ul>
           <b>
                     <li> Contenido completos con seguimiento docente sobre PHP, HTML Y CSS </li> 
                     <li> Precio Final de los cursos: $ <?php  echo number_format($preciofinal, 2,',','.') ?>  </li>               
                      <li> Horas totales cursadas: <?php  echo $total_horas ?> Hs  </li>
                     <li> Promedio de Horas cursadas: <?php  echo $promedio_horas ?> Hs </li>
          <b>
          </ul>  
    

          </div>

        </section>

        <?php include ("footer.php") ?>
              
