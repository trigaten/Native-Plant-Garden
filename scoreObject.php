<?php

class scoreObject{
private $string;
private $score;
private $message;

function __construct(){

    $args = func_get_args;
    $this->string = $args[0];
    $this->score = $args[1];

    if (sizeof($args>2)){
    $this->message = $args[2];
    }else{
    $this->message = "";  
    }

}

function getScore(){
    return $this->score;
}

function getString(){
    return $this->string;
}

function getMessage(){
    return $this->message;
}


function setScore($score){
    $this->score = $score;
}

function setString($string){
    $this->string = $string;
}

function setMessage($message){
    $this->message = $message;
}
 

}




?>