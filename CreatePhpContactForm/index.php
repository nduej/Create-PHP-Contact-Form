<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Create PHP Contact Form</title>
    <link href="https://fonts.googleapis.com/css?family=Roboto+Condensed:400.700" rel="stylesheet">
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <main>
        <p>SEND E-MAIL</p>
        <form class="contact-form" action="contactform.php" method="post">
            <input type="text" name="name" value="" placeholder="Full Name">
            <input type="text" name="mail" value="" placeholder="Your Email">
            <input type="text" name="subject" value="" placeholder="Subject">
            <textarea name="message" placeholder="Message"></textarea>
            <button type="submit" name="submit">SEND MAIL</button>
        </form>  
   </main>
</body>
</html>