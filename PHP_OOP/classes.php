<?php
    //https://www.youtube.com/watch?v=pTB0EiLXUC8

    //ENCAPSULATION

    //ABSTRACTION

    //INHERITANCE

    //POLY MORPHISM

    //MVC
    //MODEL VIEW CONTROLLER

    class databaseConnection {
        private $servername = "localhost";
        private $username = "tehuster";
        private $password = "@Banaan007";
        private $database = "CodeGorilla";

        protected $database_connection;

        public function init_connection(){
            try {         
                $dbm = "mysql:host=" . $this -> servername . ";dbname=" . $this -> database;

                $conn = new PDO($dbm, $this -> username, $this -> password);
                // set the PDO error mode to exception
                $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
                
                $this -> database_connection = $conn;
                // echo "Connected successfully: <br>"; 
            }
            catch(PDOException $e) {
                echo "Connection failed: " . $e->getMessage();
            }
        }
    }

    class getData extends databaseConnection{
        private $db_querie; //SELECT * FROM Gorillas
        // We hebben een connectie opgeslagen in database_connection
        public function __construct($querie) {
            $this -> db_querie = $querie;
        }

        public function getDBData(){            
            $data = $this -> database_connection -> query($this -> db_querie);  
            return $data;
        }
    }

    class Card {
        private $user_firstname;
        private $user_lastname;
        private $user_title;
        private $user_url;

        public function __construct($firstname, $lastname, $title, $img_url) {
            $this -> user_firstname = $firstname;
            $this -> user_lastname = $lastname;
            $this -> user_title = $title;
            $this -> user_url = $img_url;
        }

        public function echoCard(){
            echo '<div class="card">' . 
                 '<img src="' . $this -> user_url . '" alt="Photo not found" style="width:100%">' .
                 '<h1>' . $this -> user_firstname  . ' ' . $this -> user_lastname . '</h1>' .
                 '<p class="title">' . $this -> user_title . '</p>' .           
                 '<p>CodeGorilla Bootcamp</p>' .
                 '</div>';    
        }
    }

    $Cards = new Card("Thomas", "Huster", "Coach", "123.jpg");
    $Cards -> echoCard();

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

