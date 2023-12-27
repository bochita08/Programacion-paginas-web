
<?php 

           // Verificar si se ha enviado el formulario
           if ($_SERVER["REQUEST_METHOD"] == "POST") {
               
               if (
                   !empty($_POST["name"]) &&
                   !empty($_POST["email"]) &&
                   !empty($_POST["direction"]) &&
                   !empty($_POST["phone"]) &&
                   !empty($_POST["password"])) {
           
                   $name = $_POST['name'];
                   $email = $_POST['email'];
                   $direction = $_POST['direction'];
                   $phone = $_POST['phone'];
                   $password = $_POST['password'];

                   //CONTROLES
           
                   if (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
                    header("Location: index4.php?mal");
                    return; // Detener la ejecución del script si el correo electrónico no es válido
                }
                   // Conectar a la base de datos
                   require 'database.php'; 
           
                   if ($conexion) {
                       // Hashear la contraseña antes de almacenarla
                       $hashedPassword = password_hash($password, PASSWORD_DEFAULT);
           
                       // Evitar inyección SQL usando sentencias preparadas
                       $stmt = mysqli_prepare($conexion, "INSERT INTO registro VALUES (DEFAULT, ?, ?, ?, ?, ?)");
                       mysqli_stmt_bind_param($stmt, "sssss", $name, $email, $direction, $phone, $hashedPassword);
           
                       if (mysqli_stmt_execute($stmt)) {
                           // Registro exitoso
                           header("Location: index4.php?bien");
                       } else {
                           // Error en la ejecución de la consulta
                           header("Location: index4.php?err");
                       }
                       mysqli_stmt_close($stmt);
                       mysqli_close($conexion);
                       
                   } else {
                       // Error en la conexión a la base de datos
                       echo "UPS... Ocurrió un error al conectar con la base de datos.";
                   }
                   
               } else {
                   // Faltan datos obligatorios
                   header("Location: index4.php?err");
               } 
               
               
           } 
           
           
           


