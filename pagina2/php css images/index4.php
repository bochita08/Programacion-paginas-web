<?php include ("header.php") ?>


<form method="post" > 
    <div class="logueo">
 <h2> Bienvenid@</h2>
<p> Inicia tu registro, nos comunicaremos con usted para mas informacion. </p>

<div class="input-78">
<?php include ("registrar.php") ?>
</div>
<?php 
    if(isset($_GET['bien'])) {
        echo "<h3> Mensaje enviado exitosamente. 
        Responderemos a la brevedad, si lo requiere o tiene alguna duda puede utilizar el sector consultas, Gracias. <h3>";
    } 
    ?>
<?php  
        if(isset($_GET['mal'])) {
            echo "<h3> Disculpe pero... El correo electrónico proporcionado no es válido. <h3>";
        } 
        ?>
<?php  
        if(isset($_GET['err'])) {
            echo "<h3> UPS... Ocurrió un error al registrar. Por favor, inténtalo de nuevo. <h3>"; 
        } 
        ?>

<div class="input-wrapper">
   <input type="text" name="name" placeholder="Nombre" >
    <img class="input-icon" src="imageslog/name.svg" alt="">
</div>

<div class="input-wrapper">
   <input type="text" name="email" placeholder="Email" >
    <img class="input-icon" src="imageslog/email.svg" alt="">
</div>

<div class="input-wrapper">
   <input type="text" name="direction" placeholder="Direccion" >
    <img class="input-icon" src="imageslog/direction.svg" alt="">
</div>

<div class="input-wrapper">
   <input type="tel" name="phone" placeholder="Telefono" >
    <img class="input-icon" src="imageslog/phone.svg" alt="">
</div>

<div class="input-wrapper">
   <input type="password" name="password" placeholder="Contraseña" >
    <img class="input-icon" src="imageslog/password.svg" alt="">
</div>

<input class="btn" type="submit" name="register" value="Enviar">
</form>

</body>

<?php include ("footer.php") ?>