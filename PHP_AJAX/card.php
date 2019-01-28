<?php

    $column = $_GET['category_key'];
    $value = $_GET['value_key'];

    include "db_connection.php";        

    $sql = "SELECT id, firstname, lastname, img_url, title FROM Gorillas WHERE $column = '$value'";
    
    $data = $conn->query($sql);  
 
    foreach ($data as $row)
    {            
        $htmlOutput  = "";         
        $htmlOutput  = '<div class="card">';
        //$htmlOutput .= '<a href="' . 'personpage.php?user_ID=' . $row['id'] . '">';
                $htmlOutput .= '<img src="' . $row['img_url'] . '" alt="' . $row['firstname'] . '" style="width:100%">';
        //$htmlOutput .= '</a>';
        $htmlOutput .= '<h1>'. $row['firstname']  . ' ' . $row['lastname'] . '</h1>';
        $htmlOutput .= '<p class="title">' . $row['title'] . '</p>';                
        $htmlOutput .= '<p>CodeGorilla Bootcamp</p>';
        $htmlOutput .= '</div>';   

        echo $htmlOutput;
    }       

    $conn = null;
  
?>

