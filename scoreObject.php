<?php

class scoreObject{
private $info;
private $score;
private $message;

function __construct(){

    $args = func_get_args;
    $this->info = $args[0];
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

function getInfo(){
    return $this->info;
}

function getMessage(){
    return $this->message;
}


function setScore($score){
    $this->score = $score;
}

function setInfo($info){
    $this->info = $info;
}

function setMessage($message){
    $this->message = $message;
}
 
}

?>