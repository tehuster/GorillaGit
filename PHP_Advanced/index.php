<?php

//Sorting objects in array by property.

class User
{
    public $name;
    public $email;
    public $age;

    public function __construct($_name, $_email, $_age) {
        $this->name = $_name;
        $this->email = $_email;
        $this->age = $_age;
    }
}

$user1 = new User("Thomas", "tehuster@gmail.com", "31");
$user2 = new User("Barack", "obama@gmail.com"   , "52");
$user3 = new User("Donald", "duck@gmail.com"    , "15");
$user4 = new User("Billy" , "jean@gmail.com"    , "14");

echo $user1->name . " " . $user1->email . " " . $user1->age . " " ;
echo $user2->name . " " . $user2->email . " " . $user2->age . " " ;
echo $user3->name . " " . $user3->email . " " . $user3->age . " " ;
echo $user4->name . " " . $user4->email . " " . $user4->age . " " ;

$user_collection = array();

array_push($user_collection, $user1);
array_push($user_collection, $user2);
array_push($user_collection, $user3);
array_push($user_collection, $user4);

print_r( $user_collection );
echo "<br>";

unset($user_collection[2]);
$user_collection = array_values($user_collection);

print_r( $user_collection );
echo "<br>";

usort($user_collection, 'sort_objects_by_age');

print_r( $user_collection );
echo "<br>";

function sort_objects_by_age($a, $b) {
	if($a->age == $b->age){ return 0 ; }
	return ($a->age < $b->age) ? 1 : -1;
}

?>