<?php include("classes.php"); ?>

<?php
    $db_conn = new DBC;
    $db_conn -> init_connection();

    $getDBData = new getDBData($db_conn -> database_conn, "SELECT * FROM Gorillas");
    $dbData = $getDBData -> getDBData();

    foreach ($dbData as $row)
    { 
        $card0 = new Card($row['firstname'], $row['lastname'], $row['title'], $row['email']);
        $card0 -> echoCard();
    }

?>

