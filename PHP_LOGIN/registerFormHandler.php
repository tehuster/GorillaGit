
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

<?php   
     
        $user_email = $_POST["email"];
        $user_password = $_POST["password1"];
        $user_firstname = $_POST["firstname"];
        $user_lastname = $_POST["lastname"];
        $news_subscription = $_POST["newsletter"];
        if($news_subscription == NULL){
            $news_subscription = 0;
        }
        $user_gender = $_POST["gender"];
    
        include "db_connect.php";

        try {
                $sql = "INSERT INTO user_info (`user_firstname`, `user_lastname`, `user_email`, `user_password`, `news_subscription`,
                 `user_gender` ) VALUES (:firstname, :lastname, :email, :password, :subscription, :gender)";
                        
                $smt = $conn->prepare($sql);

                echo $news_subscription;

                $smt->execute(array(':firstname' => $user_firstname, ':lastname' => $user_lastname, ':email' => $user_email, 
                ':password' => $user_password, ':subscription' => $news_subscription, ':gender' => $user_gender));
                echo "Registered successfully";
            }
        catch(PDOException $e)
            {
                echo $sql . "<br>" . $e->getMessage();
            }
        
        $conn = null;
        header("location:login.php");
     
?>