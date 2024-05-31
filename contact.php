<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $name = htmlspecialchars($_POST['name']);
    $email = htmlspecialchars($_POST['email']);
    $message = htmlspecialchars($_POST['message']);
    
    // Here you can add code to send the email or store the message in a database
    // For demonstration, we'll just display the message

    echo "<!DOCTYPE html>
    <html lang='en'>
    <head>
        <meta charset='UTF-8'>
        <meta name='viewport' content='width=device-width, initial-scale=1.0'>
        <title>Contact Received</title>
        <style>
            body {
                font-family: Arial, sans-serif;
                background: #f4f4f4;
                text-align: center;
                padding: 50px;
            }
            .message-box {
                background: #fff;
                padding: 20px;
                margin: 20px auto;
                width: 80%;
                max-width: 600px;
                box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
            }
        </style>
    </head>
    <body>
        <div class='message-box'>
            <h1>Thank You, $name!</h1>
            <p>We have received your message and will get back to you shortly.</p>
            <p><strong>Email:</strong> $email</p>
            <p><strong>Message:</strong> $message</p>
        </div>
    </body>
    </html>";
} else {
    // Redirect to the homepage if accessed directly
    header("Location: ss.php");
    exit();
}
?>
