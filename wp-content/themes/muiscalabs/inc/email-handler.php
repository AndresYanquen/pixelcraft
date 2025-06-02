<?php

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Retrieve form fields
    $name = strip_tags(trim($_POST["name"]));
    $email = filter_var(trim($_POST["email"]), FILTER_SANITIZE_EMAIL);
    $subject = strip_tags(trim($_POST["subject"]));
    $message = trim($_POST["message"]);

    // Validate input
    if (empty($name) || empty($email) || empty($subject) || empty($message) || !filter_var($email, FILTER_VALIDATE_EMAIL)) {
        echo "error";
        exit;
    }

    // Email recipient
    $to = "andres.yanquen6@gmail.com";  // 🔹 Change this to your real email
    $email_subject = "Nuevo mensaje de contacto: $subject";
    
    // Email body
    $email_body = "Has recibido un nuevo mensaje de contacto:\n\n";
    $email_body .= "Nombre: $name\n";
    $email_body .= "Correo: $email\n\n";
    $email_body .= "Mensaje:\n$message\n";

    // Headers
    $headers = "From: $name <$email>\r\n";
    $headers .= "Reply-To: $email\r\n";

    // Send email
    if (mail($to, $email_subject, $email_body, $headers)) {
        echo "success";
    } else {
        echo "error";
    }
} else {
    echo "error";
}

?>
