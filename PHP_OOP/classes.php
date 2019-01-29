<?php

    class getDBData {
        private $db_querie;
        private $db_conn;

        public function __construct($db_conn, $querie) {
            $this -> db_conn = $db_conn;
            $this -> db_querie = $querie;
        }

        public function getDBData(){            
            $data = $this -> db_conn -> query($this -> db_querie);  
            return $data;
        }
    }

    class Card {
        private $user_firstname;
        private $user_lastname;
        private $user_title;
        private $user_city;

        public function __construct($firstname, $lastname, $title, $city) {
            $this -> user_firstname = $firstname;
            $this -> user_lastname = $lastname;
            $this -> user_title = $title;
            $this -> user_city = $city;
        }

        public function echoCard(){
            echo '<div class="card">
                  <h1>'.  $this -> user_firstname  . ' ' .  $this -> user_lastname . '</h1>
                  <p class="title">' .  $this -> user_title . '</p>
                  <p>Uit: ' . $this -> user_city . '</p>';
        }
    }
    
    class DBC {
        private $servername = "localhost";
        private $username = "root";
        private $password = "";
        private $database = "gorillas";

        public $database_conn;

        public function init_connection(){
            try {         
                $dbm = "mysql:host=" . $this -> servername . ";dbname=" . $this -> database;

                $conn = new PDO($dbm, $this -> username, $this -> password);
                // set the PDO error mode to exception
                $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
                
                $this -> database_conn = $conn;
                // echo "Connected successfully: <br>"; 
            }
            catch(PDOException $e) {
                echo "Connection failed: " . $e->getMessage();
            }
        }
    }


    class navbar {
        
        //Maak verbinding met DB
    }
       
    class adminNavbar extends navbar {

        // The  child can use the parent's class code
    }








    interface Shape {
        public function calcArea();
    }


    class Circle implements Shape {
        private $radius;
         
        public function __construct($radius)
        {
          $this -> radius = $radius;
        }
        
        // calcArea calculates the area of circles 
        public function calcArea()
        {
          return $this -> radius * $this -> radius * pi();
        }
    }

    class Rectangle implements Shape {
        private $width;
        private $height;
         
        public function __construct($width, $height)
        {
          $this -> width = $width;
          $this -> height = $height;
        }
        
        // calcArea calculates the area of rectangles   
        public function calcArea()
        {
          return $this -> width * $this -> height;
        }
      }

    $circ = new Circle(3);
    $rect = new Rectangle(3,4);


    









    

?>

