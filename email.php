<?php

if (isset($_POST["send"]))
    if (!empty(($_POST["name"]) && !empty($_POST["email"]) && !empty($_POST["subject"]) && !empty($_POST["message"]))) {
        $name = $_POST["name"];
        $email = $_POST["email"];
        $subject = $_POST["subject"];
        $message = $_POST["message"];

        $header = "From: noreply@example.com" . "\r\n";
        $header = "Reply-To: noreply@example.com" . "\r\n";
        $header = "X-Mailer: PHP/" . phpversion();

        mail($email, $email, $subject, $header);

        if($email){
            echo "
            <script>
            alert('Message sent successfully')
            </script>
            ";
        }
    }
?>