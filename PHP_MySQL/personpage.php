<head>
    <link rel="stylesheet" type="text/css" media="screen" href="style.css" />
</head> 
<body>
    <div class="flex"> 
    <?php
    include "db_connection.php";

    $chocola = $_GET['YOYO']; 

    $sql = "SELECT firstname, lastname, img_url, title FROM Gorillas WHERE id = '$chocola'";
    
    $data = $conn->query($sql);     
  
     foreach ($data as $row)
    {   
        $htmlOutput  = "";         
        $htmlOutput  = '<div class="bigcard">';
        $htmlOutput .= '<a href="' . 'personpage.php?firstname=' . $row['firstname'] . '">';
            $htmlOutput .= '<img src="' . $row['img_url'] . '" alt="' . $row['firstname'] . '" style="width:100%">';
        $htmlOutput .= '</a>';
        $htmlOutput .= '<h1>'. $row['firstname']  . ' ' . $row['lastname'] . '</h1>';
        $htmlOutput .= '<p class="title">' . $row['title'] . '</p>';                
        $htmlOutput .= '<p>CodeGorilla Bootcamp</p>';
        $htmlOutput .= '</div>';   

        echo $htmlOutput;
    }  

    $conn = null;      
?>
    </div>
</body> 


