<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    
    $name = htmlspecialchars(trim($_POST['name']));
    $email = htmlspecialchars(trim($_POST['email']));
    $subject = htmlspecialchars(trim($_POST['subject']));
    $message = htmlspecialchars(trim($_POST['message']));
    
    
    ?>
    <!DOCTYPE html>
    <html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <title>Submission Success</title>
        <link rel="icon" type="image/x-icon" href="ignite25pic.png">
        <style>
            body {
                font-family: 'Lucida Sans', 'Lucida Sans Regular', 'Lucida Grande', 'Lucida Sans Unicode', Geneva, Verdana, sans-serif;
                text-align: center;
                margin: 0;
                padding: 0;
                color:white;
            }
            .corner-image {
                position: absolute;
                top: 20px;
                left: 20px;
                width: 105px;
                height: 105px;
            }
            a {
                text-decoration: none;
                color: blue;
            }
            a:hover {
                text-decoration: underline;
            }
        </style>
    </head>
    <body bgcolor="black">
        <a href='index.html'>
            <img src='ignite25pic.png' alt='Success' class='corner-image'>
        </a>
        <h1>Thank You!</h1>
        <p>Your message has been sent successfully.</p>
        <p><b>Name:</b> <?php echo $name; ?></p>
        <p><b>Email:</b> <?php echo $email; ?></p>
        <p><b>Subject:</b> <?php echo $subject; ?></p>
        <p><b>Message:</b> <?php echo $message; ?></p>
        <p><a href='contact.html'>Go back to the contact page</a></p>
    </body>
    </html>
    <?php
} else {
    
    header("Location: contact.html");
    exit();
}
?>
