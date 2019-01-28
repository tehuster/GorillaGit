<?php
    $latitude = $_GET['la'];
    $longitude = $_GET['lo'];
    
    $url = "http://api.openweathermap.org/data/2.5/weather?lat=" . $latitude . "&lon=" . $longitude . "&units=metric&APPID=bcc4494fab8d013bf08572bf17c0b460";

    $json = file_get_contents($url);

    var_dump($json);

    //   echo "<br>";
    //   echo "<br>";

    // $weatherObject = json_decode($json);  

    //  var_dump($weatherObject);

    //   echo "<br>";
    //   echo "<br>";

    //  echo $weatherObject -> name;
    //  echo "<br>";
    //  echo $weatherObject -> main -> temp;
    //  echo "<br>";
    //  echo $weatherObject -> weather[0] -> description;

    // echo '<h1>' . $weatherObject -> name . '</h1>';
    // echo '<h2>' . $weatherObject -> main -> temp . '</h2>';
    // echo '<h3>' . $weatherObject -> weather[0] -> description . '</h3>';
?>