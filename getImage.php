<?php
/** contains a number of methods that scrape images */

function getImage($query) {
    $image_url = getURL($query);
    return '<img src="' . $image_url . '" alt="error">'; 
}


function getUrl($query) {
    $search_query = ""; //set this variable empty string (this may or may not be necessary :D)
    $search_query = $query;
    $search_query = urlencode($search_query);
    $search_query = "https://www.google.com/search?q=".$search_query."&tbm=isch";
    $string = curl($search_query); //string with data

    libxml_use_internal_errors(true);
    $dom = new DOMDocument;
    @$dom->loadHTML($string);
    $images_dom = $dom->getElementsByTagName('img');
    foreach ($images_dom as $img) {
        if($img->hasAttribute('src')){
            $image_url = $img->getAttribute('src');
        }
        break;
    }
    
    return $image_url; 
}


function curl($url){
    $ch = curl_init();
    curl_setopt($ch, CURLOPT_URL,$url);
    curl_setopt($ch, CURLOPT_RETURNTRANSFER,1);
    $return = curl_exec($ch);
    curl_close ($ch);
    return $return;
}

?>




