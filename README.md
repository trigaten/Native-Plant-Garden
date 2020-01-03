sry for typos :) also not an exhaustive list of stuff
# Native-Plant-Gardens
A Google Sheets API driven site that displays native plant information from around the Friends School campus.
Sources data from this Sheet: https://docs.google.com/spreadsheets/d/1v6i3MFlBfTom7p_WZHs-hK850D2pTg2kk4XJbrLlkd8/edit#gid=1998663239
## Knowledge needed
  * PHP
    * Basics - variables, loops, objects
    * Special linguistic related functions - explode(), levenstein()
  * HTML / Javascript / CSS
    * Knowledge on how to send/receive/interact with data with forms and PHP files
    * Just a ton of design knowledge using these languages - this is mainly what the site needs (to be beautified)
    
## Software required/recommended
  * Some knowledge of Github (and how to connect it to VSCode so you can work as a team and upload edits)
  * VSCode - the code compiler you should be working with. I do not recommend Eclipse for a project like this.
  https://www.google.com/url?sa=t&rct=j&q=&esrc=s&source=web&cd=1&cad=rja&uact=8&ved=2ahUKEwjg2om6jejmAhUkvFkKHe67Ax8QFjAAegQIDxAC&url=https%3A%2F%2Fcode.visualstudio.com%2F&usg=AOvVaw15O90sm1ios8AUpw56hCml
  * MAMP - basically a program that lets you set up a local webserver on your computer so you can test the website
  https://www.google.com/url?sa=t&rct=j&q=&esrc=s&source=web&cd=1&cad=rja&uact=8&ved=2ahUKEwiKv6TujejmAhVtw1kKHT6uAR0QFjAAegQIEBAC&url=https%3A%2F%2Fwww.mamp.info%2Fen%2F&usg=AOvVaw3drr3u1bhleqOKYGpy8sOp
  
## Core file breakdown:
  These are essentially intermediary programs - they talk to the Google API stuff and are controlled with some simplified methods. Additionally they are the backbones of the site and are basically the only files (aside from the DNCs below) that need to be kept should you decide to delete other stuff (though you can (carefully) edit these files).
  * arrayDownloader.php - object that has functions which return the plant chart info (planting log and plant characteristics)
  * getImage.php - functions that fetch the requested image from where they are stored and if the image is not found searches and downloads it from Google.
  * searchObject.php - object that contains a number of search functions as well as the site Search Engine
  
## More info:
This uses the Google Sheets API, but you won't need to write code using it as I have already written methods that do such. Most of this site's core functionality (getting images, searching for plant info, returning this info to display programs) is solid, but the display programs need a lot of work. These are files that will be communicating with the core, receiving data, and using HTML/Javascript/CSS to display it in a manner that will hopefully be much better that it is displayed so far.

## Features that should be added:
  * Better displays - just all around website needs to be beautified
  * Search Engine 
    * Needs to return more accurate results
    * When displaying results maybe should do color gradient (for example, the more relevant (higher scored) a plant is, the brighter a shade of green it should be displayed in)
  * Implement a binary search in the searchArrayFor() method in searchObject.php
  * Optimize search engine (the smartSearch() method in searchObject.php)
  * A number of small display problems
  * Check Github "projects" list for this repository
  * Whatever y'all think
  
## Do not change these folders/files (DNCs):
 * folders
   * composer
   * Google
   * google-api-php-client-2.2.2
 * files
   * headings.php
   * .htaccess
   * credentials.json
   * servicekey.json
   * composer.phar
   * README.md
   
