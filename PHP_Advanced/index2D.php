<?php

//Adding, removing, deleting 2d array. 

/////////////////////////////Create 2d array;
$shopCart = array
  (
  array("p_id"=>"1","p_amount"=>"4"),
  array("p_id"=>"2","p_amount"=>"3"),
  array("p_id"=>"4","p_amount"=>"2"),
  array("p_id"=>"8","p_amount"=>"1"),
  );

//var_dump($shopCart);

//////////////////////////////Read 2d array;

// echo count($shopCart);
function printShopCart($ARRAY){ 
    for ($i=0; $i < count($ARRAY); $i++) { 
    echo "Product index: " . $i;
    echo " | Product id: " . $ARRAY[$i]["p_id"];
    echo " | Product amount: " . $ARRAY[$i]["p_amount"];
    echo "<br>";
    }
    echo "<br>";
}

//////////////////////////////Add 2d array;
//first add without checking if it already exists

$newEntry = array("p_id"=>"36","p_amount"=>"50");

array_push($shopCart, $newEntry); //Kan ook in 1 keer

//check if it already exists

function searchForId($ID, $ARRAY) {
    foreach ($ARRAY as $key => $val) {        
        if ($val['p_id'] == $ID) {           
            return $key;
        }
    }
    return null;
 }

//check if not null. if null push to array. if !null ++ amount.

function addToShopCart($P_ID, $P_AMOUNT, $ARRAY){   //Netter als je functie maakt voor niet alleen SHOPCART
    if(searchForId($P_ID, $ARRAY) == null){
        //echo "ID NOT IN ARRAY PUSH NEW ID TO ARRAY + AMOUNT <br>";
        $HALLO = array("p_id" => $P_ID,"p_amount" => $P_AMOUNT);               
        array_push($ARRAY, $HALLO);  
        //echo "ADDED ID: " . $P_ID . "ADDED AMOUNT: " . $P_AMOUNT . "<br>"; 
        return $ARRAY;       
    }else{
        //echo "ID IS IN ARRAY, SET AMOUNT  <br>";
        $index = searchForId($P_ID, $ARRAY);
        $ARRAY[$index]["p_amount"] = $P_AMOUNT;
        //echo "ID: " . $P_ID . "SET AMOUNT: " . $P_AMOUNT . " @ INDEX" . $index . "<br>"; 
        return $ARRAY;
    }
    echo "<br>";
}

printShopCart($shopCart);
$shopCart = addToShopCart(2222, 22123123, $shopCart);
$shopCart = addToShopCart(4, 3000, $shopCart);
printShopCart($shopCart);

function removeElementFromArray($ELEMENT_INDEX, $ARRAY){
    unset($ARRAY[$ELEMENT_INDEX]);
    $ARRAY = array_values($ARRAY);
    return $ARRAY;
}

$shopCart = removeElementFromArray(2, $shopCart);
$shopCart = removeElementFromArray(4, $shopCart);
$shopCart = removeElementFromArray(3, $shopCart);

printShopCart($shopCart);

?>