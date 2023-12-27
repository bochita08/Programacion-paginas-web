<?php include ("header.php"); ?>

<section class ="califica">
<h1> 🧑 Ejemplo de calificacion </h1>
<?php
echo '<span> <h1>🏛️ <u> Panel del Alumno - Programacion Backend  </u> 🏛️</h1> <span>';
echo "<p> Se presenta a manera de ejemplo el sistema evaluativo para los Cursos HTML, CSS y PHP Presentado por High+.
A continuacion se presentará el método evaluativo utilizado en los cursos de HTML, CSS y PHP. Se demostrarán las notas necesarias y las condiciones que deben ser respetadas para la evaluación de los estudiantes. Este panel es de exclusividad del alumno para la visualizacion de su recorrido a lo largo esta transicion de cursos tomas en la institucion High+. Se presenta al alumno entonces su condicion frente a los cursos, los contenidos otorgados por el mismo y su cumplimiento o no recordando que para la aprobacion del mismo se necesitara la nota igual o mayor a 7,00 o 70 puntos osbre 100. Por ultimo a manera resumen se presentan sus estadisticas y calificacion promedio con las aclaraciones correspondietnes al curso. <p>" ;

echo '<h3>   🎆 Unidad 1 </h3>';
        //VARIABLES
            
        #Curso 1
        $titulo= ' 🥇Curso de PHP.';
        $programas_curso = 2 ;
        $nota_curso = 9 ;
        $precio_curso = number_format($nota_curso, 2,',','.');
        $responsable= 'Hernan Jose Rodriguez.';
        $fecha= '25/09/2023';
        $tiempo_cursado= 120;

        #Curso 2
        $titulo2= ' 🥇Curso de HTML.';
        $programas_curso2 = 2;
        $nota_curso2 = 8;
        $precio_curso2 = number_format($nota_curso2, 2,',','.');
        $responsable2= 'Victor Gaston Martins.';
        $fecha2= '25/09/2023';
        $tiempo_cursado2= 120;

        #Curso 3
        $titulo3= ' 🥇Curso de CSS.';
        $programas_curso3 = 1;
        $nota_curso3 = 10;
        $precio_curso3 = number_format($nota_curso3, 2,',','.');
        $responsable3= 'Stella Maria Gasparotti.';
        $fecha3= '25/09/2023';
        $tiempo_cursado3= 150;

        $notafinal = ($nota_curso + $nota_curso2 + $nota_curso3)/3
     ?>
 
            <?php #SECCION CONDICION DEL ALUMNO ?>

        <section class ="contenido">
          <div class="curso_1"> 
          <h2> <?php  echo $titulo ?> </h2>
          <ul>  
                <li> Instalacion de programas: <?php  echo $programas_curso ?>  </li>               
                <li> Responsable: <?php  echo $responsable ?> </li>
                <li> Horas de cursado: <?php  echo $tiempo_cursado ?> Hs  </li>
                <li> Fin de cursado: <?php  echo $fecha ?> </li>
                <li> Calificacion Final: <?php  echo number_format($nota_curso, 2,',','.') ?>  </li>
                <section class ="aprobacion">
<?php
// IF ELSEIF ELSE

#variablas
#condicion(){ afirmacion es verdadero}
#segunda condicion caso si son iguales
#Caso contrario es decir falso es menor

$a= 7;
$b= $nota_curso;


if ($b>=$a){

    echo " APROBADO - Tu calificacion es " .number_format($b, 2,',','.') . "<br>";
}elseif ($a == $b) {
    echo " APROBADO - Tu calificacion es " . number_format($b, 2,',','.') .  "<br>";
}else {
    echo  " DESAPROBADO - Tu calificacion es " . number_format($b, 2,',','.') . " menor a " . number_format($a, 2,',','.') . "<br>";
}

?> 

</section>
          </ul>

          </div>

          <?php
        echo '<h3>   🎆 Unidad 2 </h3>';
    
        ?> 
      
          <div class="curso_2">
          <h2> <?php  echo $titulo2 ?> </h2>
          <ul>  
                <li> Instalacion de programas: <?php  echo $programas_curso2 ?>  </li>               
                <li> Responsable: <?php  echo $responsable2 ?> </li>
                <li> Horas de cursado : <?php  echo $tiempo_cursado2 ?> Hs </li>
                <li> Fin de cursado: <?php  echo $fecha2 ?> </li>
                <li> Calificacion Final:  <?php  echo number_format($nota_curso2, 2,',','.') ?>  </li>
                <section class ="aprobacion">
<?php
// IF ELSEIF ELSE

#variablas
#condicion(){ afirmacion es verdadero}
#segunda condicion caso si son iguales
#Caso contrario es decir falso es menor

$a= 7;
$b= $nota_curso2;


if ($b>=$a){

    echo " APROBADO - Tu calificacion es " .number_format($b, 2,',','.') . "<br>";
}elseif ($a == $b) {
    echo " APROBADO - Tu calificacion es " . number_format($b, 2,',','.') .  "<br>";
}else {
    echo  " DESAPROBADO - Tu calificacion es " . number_format($b, 2,',','.') . " menor a " . number_format($a, 2,',','.') . "<br>";
}
 
?> 

</section>
          </ul>
          </div>

          <?php
        echo '<h3>   🎆 Unidad 3 </h3>';
        
        ?> 

          <div class="curso_3">
          <h2> <?php  echo $titulo3 ?> </h2>
          <ul>  
                <li> Instalacion de programas: <?php  echo $programas_curso3 ?>  </li>               
                <li> Responsable: <?php  echo $responsable3 ?> </li>
                <li> Horas de cursado : <?php  echo $tiempo_cursado3 ?> Hs  </li>
                <li> Fin de cursado: <?php  echo $fecha3 ?> </li>
                <li> Califciacion Final: <?php  echo number_format($nota_curso3, 2,',','.') ?>  </li>
                <section class ="aprobacion">
<?php
// IF ELSEIF ELSE

#variablas
#condicion(){ afirmacion es verdadero}
#segunda condicion caso si son iguales
#Caso contrario es decir falso es menor

$a= 7;
$b= $nota_curso3;


if ($b>=$a){

    echo " APROBADO - Tu calificacion es " .number_format($b, 2,',','.') . "<br>";
}elseif ($a == $b) {
    echo " APROBADO - Tu calificacion es " . number_format($b, 2,',','.') .  "<br>";
}else {
    echo  " DESAPROBADO - Tu calificacion es " . number_format($b, 2,',','.') . " menor a " . number_format($a, 2,',','.'). "<br>";
}
 
?> 

</section>
          </ul>

          </div>

          <?php  
      

          #PROGRESO
          
          $promedio_cursos= ($notafinal) ;
          $total_horas = ($tiempo_cursado + $tiempo_cursado2 + $tiempo_cursado3) ;
          
          $promedio_horas = (($tiempo_cursado + $tiempo_cursado2 + $tiempo_cursado3)/3) ;
          $titulo3 = "🙂 Resumen - Curso de Programacion Backend:  "
          
          ?>

          <?php 
          echo '<h3>   🎆 Resumen de Calificaciones </h3>';
          print '<h4> - A continuacion se presenta un resumen para el alumno con respecto a los cursos dictados por la catedra.</h4>';
          
          ?>

           <div class="Resultados">
           <h5> <?php  echo $titulo3 ?> </h5>
           <ul>
           <b>
                <li> Contenido completos con seguimiento docente sobre PHP, HTML Y CSS </li>               
                <li> Horas totales cursadas: <?php  echo $total_horas ?> Hs  </li>
                <li> Promedio de Horas cursadas: <?php  echo $promedio_horas ?> Hs </li>
                <li> Calificacion Promedio Final: <?php  echo number_format($notafinal, 2,',','.') ?>  </li> 
                
                    
</section>

<section class ="aprobacion">
<?php
// IF ELSEIF ELSE

#variablas
#condicion(){ afirmacion es verdadero}
#segunda condicion caso si son iguales
#Caso contrario es decir falso es menor

$a= 7;
$f= ($nota_curso + $nota_curso2 + $nota_curso3) / 3;
$c1 = $nota_curso;
$c2 = $nota_curso2;
$c3 = $nota_curso3;

if ($c1 >= 7 && $c2 >= 7 && $c3 >= 7) {
    $f = ($nota_curso + $nota_curso2 + $nota_curso3) / 3;
    if ($f >= 7) { echo "APROBADO - Tu calificacion promedio final es " .number_format($f, 2,',','.') . "<br>" ;
    } else {
        echo "DESAPROBADO - Tu calificacion  promedio es " . number_format($f, 2,',','.') . " menor a " . number_format($a, 2,',','.') . "<br>";
    }}  else {
        echo "DESAPROBADO - Tu calificacion promedio es " . number_format($f, 2,',','.') . " sin embargo NO alcanzaste la aprobacion minima (7) todos los cursos" . "<br>";
    }
    
?> 

</section>


<P><div class="condiciones_notas"> 

Los estudiantes deben obtener una calificación mínima de 70 puntos sobre 100 para aprobar el curso.
Cada evaluación tiene un peso específico en la calificación final del curso.
Condiciones que se deben respetar:

EL ALUMNO DEBE APROBAR OBLIGATORIA CADA PARTE DEL CURSO CON NOTA MAYOR O IGUAL A 7.
Los estudiantes deben entregar los proyectos individuales y grupales en las fechas establecidas.
Se debe respetar la propiedad intelectual y evitar el plagio en todos los trabajos presentados.
Durante las evaluaciones, está prohibido el uso de recursos no autorizados o el copiado de código de fuentes externas sin la debida atribución.
El método evaluativo se divide en los siguientes componentes:

Es importante resaltar que la evaluación se realizará de manera objetiva y justa, siguiendo los criterios establecidos. Los estudiantes deberán esforzarse y cumplir con las condiciones establecidas para alcanzar las notas necesarias y aprobar el curso.

Confiamos en que este método evaluativo proporcionará a los estudiantes una experiencia completa y enriquecedora en el aprendizaje de HTML, CSS y PHP.

</div><P>














<?php include ("footer.php"); ?>