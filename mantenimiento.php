<?php
// Puedes usar esto como landing de mantenimiento
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Under Maintenance</title>
    <style>
        body {
            margin: 0;
            padding: 0;
            font-family: sans-serif;
            background-color: #fff;
            color: #222;
            display: flex;
            flex-direction: column;
            align-items: center;
            justify-content: center;
            height: 100vh;
            text-align: center;
        }

        .logo {
            margin: 20px 0;
        }

        .contact {
            margin-top: 30px;
        }

        .contact a {
            display: inline-block;
            margin: 0 10px;
            color: #bda168;
            text-decoration: none;
            font-size: 1rem;
        }

        .contact a:hover {
            text-decoration: underline;
        }

        @media (max-width: 600px) {
            .contact a {
                display: block;
                margin: 5px 0;
            }
        }
    </style>
</head>
<body>

    <h2>We are under maintenance</h2>

    <div class="logo">
        <img src="https://mrcigarshop.com/wp-content/uploads/2022/12/logo-1.png" alt="Mr Cigar Shop Logo" style="max-width: 200px; width: 100%;">
    </div>

    <div class="contact">
        <p><strong>Please contact us at:</strong></p>
        <a href="tel:+34660854448">+34 660 854 448</a>
        <a href="mailto:info@mrcigarshop.com">info@mrcigarshop.com</a>
        <a href="https://wa.me/34660854448" target="_blank">WhatsApp</a>
    </div>

</body>
</html>
