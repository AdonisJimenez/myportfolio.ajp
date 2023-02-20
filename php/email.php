<?php
    $addressee = "adonisjimenezp02@gmail.com";
    $name = $_POST["name"];
    $email = $_POST["email"];
    $subject = $_POST["subject"];
    $message = $_POST["message"];

    $header = "Enviado desde la página de Adonis Jimenez";
    $completeMessage = $message . "\nAtt: " . $name;

    mail($addressee, $subject, $completeMessage, $header);
    echo "<script>alert('correo enviado exitosamente')</script>";
    echo "<script>setTimeout(\"location.href='index.html'\", 1000)</script>"; 
?>