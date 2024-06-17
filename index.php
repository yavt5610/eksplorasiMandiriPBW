<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Contact Form</title>
    <link rel="stylesheet" href="style.css">
</head>

<body>
    <div class="container">
        <form id="contact" action="mail.php" method="post">
            <img class="image" src="asset/logo.jpg" alt="profile_image" width="250px">
            <br>
            <h1>Contact Form</h1>

            <fieldset>
                <input placeholder="Nama:" name="name" type="text" tabindex="1" autofocus>
            </fieldset>
            <fieldset>
                <input placeholder="Alamat Email: example@gmail.com" name="email" type="email" tabindex="2">
            </fieldset>
            <fieldset>
                <input placeholder="Subjek:" type="text" name="subject" tabindex="4">
            </fieldset>
            <fieldset>
                <textarea name="message" placeholder="Ketik Detail Pesan Anda Disini..." tabindex="5"></textarea>
            </fieldset>

            <fieldset>
                <button type="submit" name="send" id="contact-submit">Submit</button>
            </fieldset>
        </form>
    </div>
</body>

</html>