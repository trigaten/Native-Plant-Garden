<?php 
include "getImage.php";
function printImage($plant){
$plantname = $plant;
$directory_plantname = 'images/'.$plantname.".jpg";
//echo $directory_plantname;
if (file_exists($directory_plantname)) {
echo '<img src="' . $directory_plantname . '" alt="error">'; 
     } 
    else{
        $link =  getUrl($plantname);
        $destdir = 'images/';
        $img=file_get_contents($link);
        file_put_contents($destdir.substr($plantname . ".jpg", strrpos("hahaha",'/')), $img);
        $imgloc = "images/$plantname".".jpg";
        echo '<img src="' . $imgloc . '" alt="error">'; 
    }
 }
?>
