<?php

    //CARD.PHP

    include "db_connection.php";        

    $sql_querie = "SELECT ID, firstname, lastname, img_url, title FROM Gorillas";
    
    $db_result = $conn->query($sql_querie);  

    foreach ($db_result as $row)
    {   
        echo '<div class="card">' .
             '<a href="personpage.php?YOYO=' . $row['ID'] . '">' .
             '<img src="' . $row['img_url'] . '" alt="' . $row['firstname'] . '" style="width:100%">' .
             '</a>' .
             '<h1>' . $row['firstname']  . ' ' . $row['lastname'] . '</h1>' .
             '<p class="title">' . $row['title'] . '</p>' .           
             '<p>CodeGorilla Bootcamp</p>' .
             '</div>';
    }       

    $conn = null;  
?>

