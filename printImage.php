<?php 
/** containts function which returns requested image */
include "getImage.php";

/** returns the image corresponding to the given plant and if said image is not in the imaages folders
 * it grabs it from Google Images and and puts it in the folder and returns it as well
 */
function printImage($plant){
$plantname = $plant;
$directory_plantname = 'images/plantImages/'.$plantname.".jpg";

if (file_exists($directory_plantname)) {
return $directory_plantname;
     } 
    else{
        $link =  getUrl($plantname);
        $destdir = 'images/plantImages';
        $img=file_get_contents($link);
        file_put_contents($destdir.substr($plantname . ".jpg", strrpos("hahaha",'/')), $img); //idek
        $imgloc = "images/plantImages/$plantname".".jpg";
        // echo '<img src="' . $imgloc . '" alt="error">'; 
        return $imgloc; 
    }
 }
?>
