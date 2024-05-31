<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Startup Company</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            margin: 0;
            padding: 0;
            background: #f4f4f4;
        }
        header {
            background: #333;
            color: #fff;
            padding: 10px 0;
            text-align: center;
        }
        .container {
            width: 80%;
            margin: 0 auto;
            padding: 20px;
            background: #fff;
        }
        .contact-form {
            background: #f9f9f9;
            padding: 20px;
            margin-top: 20px;
        }
        .contact-form input, .contact-form textarea {
            width: 100%;
            padding: 10px;
            margin: 5px 0;
        }
        .contact-form button {
            background: #333;
            color: #fff;
            border: none;
            padding: 10px 20px;
            cursor: pointer;
        }
    </style>
</head>
<body>
    <header>
        <h1>Welcome to Our Startup</h1>
    </header>
    <div class="container">
        <section>
            <h2>About Us</h2>
            <p>We are a dynamic startup focused on delivering innovative solutions to modern problems. Our team of experts is dedicated to pushing the boundaries of technology and providing exceptional service to our clients.</p>
        </section>
        <section>
            <h2>Our Services</h2>
            <p>Our offerings include a range of services designed to help your business grow:</p>
            <ul>
                <li>Service One</li>
                <li>Service Two</li>
                <li>Service Three</li>
            </ul>
        </section>
        <section>
            <h2>Contact Us</h2>
            <form class="contact-form" action="contact.php" method="post">
                <label for="name">Name:</label>
                <input type="text" id="name" name="name" required>
                <label for="email">Email:</label>
                <input type="email" id="email" name="email" required>
                <label for="message">Message:</label>
                <textarea id="message" name="message" rows="5" required></textarea>
                <button type="submit">Send Message</button>
            </form>
        </section>
    </div>
</body>
</html>
