<!--
Form -> Field: username; Field: password
Form handler -> loginFormHandler.php
Login Button
If you have no account -> Go to register page

   BY PHILIP ERWIN FERRAN -->

<!DOCTYPE html>

<html lang="en-US">
<head>
    <link rel="stylesheet" type="text/css" href="login.css"/>
    <title>Login</title>
</head>
<body>
    <?php
    //if(){}
    //isset()
    //$_GET['et']

        if(isset($_GET['et'])){
            echo '<h1> EMAIL/WW IS ONJUIST </h1>';
        }else{
            //niks
        }
    ?>

    <form class="loginForm" action="loginFormHandler.php" method="POST">
        <img src="http://clipartmag.com/images/cartoon-fire-png-8.png" alt="flame" class="loginImg"/>
        <h1>Login</h1>
        <label for="username">Email:</label>
        <input type="email" id="username" name="user_email" autofocus required/>
        
        <label for="password">Password:</label>
        <input type="password" id="password" name="user_password" required/>

        <button type="submit" class="submitButton">Login</button>
        <p>Don't have an account? <a href="register.php">Register here</a></p>
    </form>

</body>

</html>
