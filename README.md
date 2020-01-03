# Native-Plant-Gardens
A Google Sheets API driven site that displays native plant information from around the Friends School campus.

## More info:
This uses the Google Sheets API, but you won't need to write code using it as I have already written methods that do such

## Core file breakdown (These are the PHP files that are necessary for the site to run and for you to understand):
  * arrayDownloader.php - object that has function which return the plant chart info (planting log and plant characteristics)
  * getImage.php - functions that fetch the requested image from where they are stored and if the image is not found searches and downloads it from Google.
  * searchObject.php - object that contains a number of search functions as well as the site Search Engine
  

## Features that should be added:
  * Better displays - just all around website needs to be beautified
  * Search Engine 
    * Needs to return more accurate results
    * When displaying results maybe should do color gradient (for example, the more relevant (higher scored) a plant is, the brighter a shade of green it should be displayed in)
  * implement a binary search in the searchArrayFor() method in searchObject.php
  * Optimize search engine (the smartSearch() method in searchObject.php)
  * A number of small display problems
  * Check Github "projects" list for this repository
  * Whatever y'all think
  

## Do not change these folders/files:
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
   
