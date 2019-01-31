<?php    
    // Start the session
    session_start();
?>

<!DOCTYPE html>
<html>
<body>
<h1>INDEX</h1>

<?php
    //Set session variables
    $_SESSION['user_name'] = 'Thomas';
    $_SESSION['user_age'] = 16;
    $_SESSION['user_role'] = 'admin';
    $_SESSION['user_gender'] = 'apache';
    $_SESSION['user_isLoggedIn'] = false;

    // echo 'Session variables are set.';
    // session_destroy();
?>

<a href="home.php">LINK</a>

</body>
</html>
