<?php
    // echo "GorillaPower";
    // echo "<br>";
    // echo $_GET["user_name"]; 
    // echo "<br>";
    // echo $_GET["user_email"]; 
    // echo "<br>";
    // echo $_GET["user_password"]; 
    // echo "<br>";
    // echo $_GET["user_job"]; 
    // echo "<br>";
    // echo $_GET["user_interest"]; 

    // echo "GorillaPower";
    // echo "<br>";
    // echo $_POST["user_name"]; 
    // echo "<br>";
    // echo $_POST["user_email"]; 
    // echo "<br>";
    // echo $_POST["user_password"]; 
    // echo "<br>";
    // echo $_POST["user_job"]; 
    // echo "<br>";
    // echo $_POST["user_interest"]; 

    
        $firstname = $_POST["user_firstname"];
        $lastname = $_POST["user_lastname"];
        $email = $_POST["user_email"];
        $user_password = $_POST["user_password"];
        $title = $_POST["user_title"];       
 
        //SELECT * FROM users WHERE user_email = '$user_email', user_pwe = '$userpw'
    
        include "db_connection.php";

        try {
                $sql = "INSERT INTO Gorillas (firstname, lastname, password, title, email)
                VALUES ('$firstname', '$lastname', '$user_password', '$title', '$email')";
                
                // use exec() because no results are returned
                $conn->exec($sql);
                echo "New record created successfully";
            }
        catch(PDOException $e)
            {
                echo $sql . "<br>" . $e->getMessage();
            }
        
        $conn = null;
    
        //header("Location: index.php");  

?>