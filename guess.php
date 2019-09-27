<?php
/***
 * Author: Hector Sanchez
 * Date: 9/24/2019
 * File: guess.php
 * Description: this is the server side
 */
if(isset($_COOKIE['random'])){
    $random = $_COOKIE['random'];
}else{
    $random = rand(1,100);
    setcookie('random', $random);
}

//retrieve player's guess
$guess = (int)$_GET['guess'];

//compare the random and guess
if($guess > $random){
    echo json_encode(array("result"=>1));
}else if($guess < $random){
    echo json_encode(array("result"=>-1));
}else{
    echo json_encode(array("result"=>0));
}