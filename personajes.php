<?php include ("header.php"); ?>

<section class ="personajes__contenedor">
<h1> 🧑‍🏫 Profesores </h1>
<?php
        echo "<p> High+ es una prestigiosa institución que se especializa brindar cursos de programación backend. Contamos con un selecto grupo de docentes altamente calificados que se destacan por su experiencia y conocimientos en la materia. Nuestros profesores poseen una amplia trayectoria en el mundo de la programación y se mantienen actualizados con las últimas tendencias tecnológicas. Su dedicación y pasión por enseñar hacen de ellos excelentes profesionales en el campo de la programación, lo que nos permite garantizar una educación de alto nivel para todos nuestros estudiantes. En High+ nos enorgullece contar con un equipo docente de primer nivel que se enfoca en brindar una formación integral y de calidad. <p> ";
        ?>
<h3> Presentando a los docentes de nuestra institucion: </h3>
<div class="personajes__botonera">
    <ul>
        <li><a href="personajes.php?personaje=hjr"> Hernan Jose Rodriguez </a></li>
        <li><a href="personajes.php?personaje=vgm"> Victor Gaston Martins  </a></li>
        <li><a href="personajes.php?personaje=sg"> Stella Maria Gasparotti </a></li>
    </ul>  
 
</div>
</section>
<?php 

   $personaje='';
   $descripcion='';
   $img='';

if (isset($_GET['personaje'])){
    switch ($_GET['personaje']){
        case "hjr" :
            $personaje ="Hernan Jose Rodriguez";
            $descripcion = " Hernan Jose Rodriguez es Ingeniero en Sistemas de Información de la Universidad Tecnológica Nacional (UTN). Posee un Postgrado en Ingeniería en Calidad (UTN), un Postgrado en Gestión Tecnológica (Universidad Austral) y las certificaciones Product Manager,Project Management Professional, Agile Certified Practitioner, Certified ScrumMaster, OKR Certified Professional e ITIL4. Habiendo comenzado su carrera en 1996, trabajó en diversas posiciones (soporte, desarrollo, testing, integración, arquitectura y gestión de proyectos) en distintas organizaciones multinacionales. Su experiencia laboral comprende más de 25 años trabajando en proyectos de IT en compañías como Accenture, Telefónica de Argentina, Banco Santander, IBM, Capgemini, Banco Galicia, Banco de Córdoba Kimberly-Clark y SAP. De los distintos desafíos en los que trabajó se destacan el liderazgo de un equipo de más de 70 personas (SW Factory), Proyectos complejos distribuidos en Latinoamérica, Servicios de infraestructura para todas las sucursales y casas centrales de Banco Santander en Argentina, Proyectos de outsourcing para España y la Migración de Datos del sistema CORE Banking de Banco Galicia a SAP Banking Services (2M de Cuentas y 102M de movimientos). A nivel académico dirige el Posgrado de Gestión de Proyectos en la Universidad Tecnológica Nacional y es el creador y coordinador de diversos cursos a distancia en el área de Tecnología y Producto. Actualmente se desempeña como Product Manager en una importante multinacional de la industria financiera     ";
            $img = './Imagenes/hjr.jpg';
            break;

        case "vgm" :
                $personaje ="Victor Gaston Martins ";
                $descripcion = "Mi nombre es Victor Gaston Martins, en el año 2015 egrese de la carrera de Ingeniería en sistemas de Información en la Universidad Tecnológica Nacional - Facultad Regional Buenos Aires. Como docente actualmente me desempeño en el nivel secundario para adultos y asi mismo en cursos de desarrollo web y aplicaciones moviles brindados por el departamento de extensión universitaria de esta Universidad. En el año 2010 comencé mi carrera profesional como desarrollador PHP, ampliando mis conocimientos en SQL, CSS, HTML, Javascript y Angular. Actualmente me desempeño como líder de proyecto en una software factory, he liderado grandes desarrollos de sitios institucionales, sistemas de información, diarios digitales y aplicaciones móviles.    ";
                $img ="./Imagenes/vgm.jpg";
                break;
        
        case "sg" :
                    $personaje ="Stella Maria Gasparotti";
                    $descripcion = "Stella Maria Gasparotti, nacida en la ciudad de Santo Tome, Santa Fe, Republica Argentina. Dedicacion en Sistemas de Software developer - Especialista en Educación y Tics. Se desempeña como desarrolladora de software en el ámbito privado, profesora y contenidista en las áreas de Programación y Robótica en diversos programas y niveles educativos. Técnica Superior en Programación. Diplomada Professional Backend Developer (UTN). Especialista Docente de Nivel Superior en Educación y TIC.   ";
                    $img= "./Imagenes/sg.jpg";
                    break;
        }


?>
<div class="personajes_descripcion">
<z div class="titulares"><h2> <?php echo $personaje ?> </h2><z>
    <p> <?php echo $descripcion ?> </p>
    <div class="contenedor__img">
    <img src="<?php echo $img; ?>" alt=" <?php echo $personaje; ?> ">
    </div>
</div>
<?php } ?>
<?php include ("footer.php"); ?>