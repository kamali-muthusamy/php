<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>log out page</title>
    <style>
        body, html {
            height: 100%;
            margin: 0;
            display: flex;
            justify-content: center;
            align-items: center;
            font-family: Arial, sans-serif;
            background-color: #f0f0f0;
        }
        .thank-you-message {
            text-align: center;
            font-size: 2em;
            color: #333;
        }
    </style>
</head>
<body>
    <?php
        // PHP code to set the thank you message
        $thankYouMessage = "Thank You!";
    ?>
    <div class="thank-you-message">
        <?php echo $thankYouMessage; ?>
    </div>
</body>
</html>
