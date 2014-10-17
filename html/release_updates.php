<?
echo file_get_contents("release_updates.xml");
//
// location of the text file that will log all the ip adresses
$file = 'homegenie_updates.log';

// ip address of the visitor
$ipadress = $_SERVER['REMOTE_ADDR'];

// date of the visit that will be formated this way: 29/May/2011 12:20:03
$date = date('d/m/Y H:i:s');

// name of the page that was visited
$webpage = $_SERVER['SCRIPT_NAME'];

// visitor's browser information
$browser = $_SERVER['HTTP_USER_AGENT'];

// Opening the text file and writing the visitor's data
$fp = fopen($file, 'a');

fwrite($fp, $date."\t".$ipadress."\t".$webpage."\t".$browser."\r\n");

fclose($fp)
?>