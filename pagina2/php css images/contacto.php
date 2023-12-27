<?php include ("header.php") ?>

<section class="contacto__formulario">
    <h1><rt> 📲 Contacto  <rt> </h1>
        <div class="espacio1"> Sumérgete en el mundo de la programación web: Descubre leyendas místicas mientras aprendes PHP, CSS y HTML. ¡Regístrate ahora y despierta tu creatividad! Además, consulta todas tus dudas en nuestro formulario de contacto. 
        ¡Tu éxito está a solo un click de distancia!.
        </div>
        <?php 
        
    if(isset($_GET['ok'])) {
        echo "<h2> Mensaje enviado exitosamente. 
        Responderemos a la brevedad, si lo requiere puede volver a realizar otra consulta, Gracias. <h2>";
    } 
    ?>

    
    <form action="enviar_consulta.php" method="post">
        
        <label for="nombre"><g section class="text"> Nombre<g></label>
        <input type="text" name="nombre"
        class="contacto__input"> 

        <label for="apellido"><g section class="text">   Apellido<g> </label>
        <input type="text" name="apellido"
        class="contacto__input"> 

        <label for="email"> <g section class="text"> Correo<g> </label>
        <input type="email" name="email"
        class="contacto__input"> 

        <label for="mensaje"><g section class="text">  Mensaje<g>  </label>
         <textarea name="mensaje" id="" cols="90" rows="10" maxlength="100" class="contacto__input"></textarea>  
        
        <input type="submit" value="Enviar consulta" class="contacto__btn">

  
    </form>
    <?php include ("footer.php") ?>
</section>
