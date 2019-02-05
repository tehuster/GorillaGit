<?php 
    include "classes.php"; 
    include "templates/header.php";
?>

<?php
    
    $getData = new getData("SELECT * FROM Gorillas");

    $getData -> init_connection();

    $dbData = $getData -> getDBData();   

    foreach ($dbData as $row)
    { 
        $card = new Card($row['firstname'], $row['lastname'], $row['title'], $row['img_url']);
        $card -> echoCard();
    }

?>

<?php
    include "templates/footer.php";
?>



