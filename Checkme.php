<?php
// Using environment library fiddle_envlib.php to files that saved under user id folder
//include "fiddle_envlib.php";
$num = 0;

$inputusr = $_GET["usrname"];

$inputpss = $_GET["pword"];

$combo = $inputusr . $inputpss;

$combohash = md5($combo);

$myFile = fopen("hp.txt", "r") or die("Login Failed! Please Contact Admisistration");

$hashed = fgets($myFile);

fclose($myFile);

if($combohash == $hashed){
    echo("You have been authenticated");
} else{
    
    echo("You have enterned an incorrect username/password authenticated");
}
    


?>
