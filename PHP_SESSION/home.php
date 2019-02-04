<h1>HOME</h1>

<?php

    // Start the session
    session_start();   

    // echo $_SESSION['user_name'];
    // echo '<br>';
    // echo $_SESSION['user_role'] ;
    // echo '<br>';
    // echo $_SESSION['user_age'] ;
    // echo '<br>';
    // echo $_SESSION['user_gender'] ;
?>

<!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8" />
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <title><?php echo $_SESSION['user_gender']; ?></title>
        <meta name="viewport" content="width=device-width, initial-scale=1"> 
    </head>
<body>

<?php 

    if(isset($_SESSION['user_isLoggedIn']) && $_SESSION['user_isLoggedIn'] == true){
        echo '<h2> Hallo, ' . $_SESSION['user_name'] . '</h2>';
    }else{
        echo '<h2> Hallo, wil je je aanmelden!?!?!??!?!?.....</h2>';
    }


?>
    
</body>
</html>