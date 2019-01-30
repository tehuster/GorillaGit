<!--
DB_INFO
user_info = tablename;
user_id = PrimaryKey;
user_firstname =  varchar(32)
user_lastname = varchar(32)
user_email = varchar(32)
user_password = varchar(32)
news_subscription = tinyint(1)
user_gender = varchar(16)
-->
<!--
max. veldlengte: 32 karakters
registratie form
field: geslacht
field: naam
field: achternaam
field: email
field: password
field: confirm password
field: nieuwsbrief ja/nee

submit button
reset button
misschien terug naar login scherm met een X karakter?

-->

<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>
    </title>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" type="text/css" media="screen" href="register.css" />
    <script src="main.js"></script>
</head>
<body>
    <form action="registerFormHandler.php" method="POST">  
        <label for="man">Man:</label>
        <input type="radio" name="gender" value="man" id="man">
        <label for="man">Vrouw:</label>
        <input type="radio" name="gender" value="vrouw" id="vrouw">
        <label for="man">Neutraal:</label>
        <input type="radio" name="gender" value="neutraal" id="neutraal">
        <label for="man">Mysterie:</label>
        <input type="radio" name="gender" value="gorilla" checked id="gorilla"><br>
        <input class="input_fields" type="text" name="firstname" placeholder="Voornaam" required maxlength="32" autofocus><br>
        <input class="input_fields"type="text" name="lastname" placeholder="Achternaam" required maxlength="32"><br>
        <input class="input_fields" type="email" name="email" placeholder="Emailadres" required maxlength="32"><br>
        <input class="input_fields" type="password" name="password1" minlenght=8 placeholder="Paswoord" required maxlength="32"><br>
        <input class="input_fields" type="password" name="password2" placeholder="Valideer paswoord" required maxlength="32"><br>
        <label for="nieuwsbrief">Abonneren op nieuwsbrief ? </label>
        <input type="checkbox" name="newsletter" value="1" checked id="nieuwsbrief"><br>
        <button type="submit">versturen</button>
        <button type="reset">resetten</button>
    </form>
</body>
</html>