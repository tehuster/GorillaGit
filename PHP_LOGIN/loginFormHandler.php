<?php
    include "db_connect.php";

    $user_email = $_POST['user_email'];
    $user_password = $_POST['user_password'];

    $result = "SELECT user_firstname
               FROM user_info 
               WHERE user_email = '$user_email' 
               AND user_password = '$user_password'";

    $db_result = $conn->query($result);

    if ($db_result->rowCount() != 0){
        foreach($db_result as $row){
            $firstname = $row['user_firstname'];
        }
        
        echo "welkom " . $firstname;
    }
    else 
    {
        echo 'The username or password is incorrect!';
        header("location:login.php?et=1;");
    }

?>