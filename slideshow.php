<?php
?>
<html>
<head>
<meta name="viewport" content="width=device-width, initial-scale=1">
<style>
* {box-sizing: border-box;}
body {font-family: Verdana, sans-serif;}
.mySlides {display: none;}
img {vertical-align: middle;}




/* On smaller screens, decrease text size */
@media only screen and (max-width: 300px) {
  .text {font-size: 11px}
}
</style>
</head>
<body>

<h2>Automatic Slideshow</h2>
<p>Change image every 2 seconds:</p>

<div class="slideshow-container">
<?php
  
  $name = "/images/bedimages/staircase/staircase";
  $count = 1; 
  $array=array();
  $exists = true; 
/*
  foreach (glob($name.=$count.=".jpg") as $image) {
  $count=$count+1; 
  echo($image); 
  $array[count] = $image;}
  }
  print_r($array);*/
  
  while ($exists == true){
    if (file_exists($name.$count.".jpg")) {
     // foreach (glob($name.=$count.=".jpg") as $image){
      $array[$count-1] = ($image);
      echo ("hi"); 
      echo($name.=$count.".jpg");?><br><?php
      //echo($count); 
      $count++;//}
     }
    else { $exists = false; 
    echo("hip"); 
    }
  }

  print_r($array); 
  
/*
  ?>
<div class="mySlides fade">
  <div class="numbertext">1 / 3</div>
  <img src="<?php echo($image);?>" style="width:100%">
  <div class="tt">Caption Text</div>
</div>

<div class="mySlides fade">
  <div class="numbertext">2 / 3</div>
  <img src="staircase2.jpg" style="width:100%">
  <div class="text">Caption</div>
</div>

<div class="mySlides fade">
  <div class="numbertext">3 / 3</div>
  <img src="staircase1.jpg" style="width:100%">
  <div class="text">Caption Three</div>
</div><?php
   ?>
</div>
<br>

<div style="text-align:center">
  <span class="dot"></span> 
  <span class="dot"></span> 
  <span class="dot"></span> 
</div>

<script>
var slideIndex = 0;
showSlides();

function showSlides() {
  var i;
  var slides = document.getElementsByClassName("mySlides");
  var dots = document.getElementsByClassName("dot");
  for (i = 0; i < slides.length; i++) {
    slides[i].style.display = "none";  
  }
  slideIndex++;
  if (slideIndex > slides.length) {slideIndex = 1}    
  for (i = 0; i < dots.length; i++) {
    dots[i].className = dots[i].className.replace(" active", "");
  }
  slides[slideIndex-1].style.display = "block";  
  dots[slideIndex-1].className += " active";
  setTimeout(showSlides, 2000); // Change image every 2 seconds
}
</script>
*/?>
</body>
</html> 
