<?php
/**
 * Created by PhpStorm.
 * User: enxhi
 * Date: 1/21/2019
 * Time: 2:48 AM
 */

require 'HomeWork1.php';

do {
    echo "Please add the length of the desired sequence! ";
    $handle = fopen("php://stdin", "r");
    $line = fgets($handle);
    if ($line < 0){
        echo "Please add positive values only!  ";
    }
}while(trim($line) < 0);
do {
    echo "Please add the number from where you want the Fibonacci sequence can start! ";
    $handle2 = fopen ("php://stdin","r");
    $line2 = fgets($handle2);
    if ($line2 < 0){
        echo "Please add positive values only!  ";
    }
}while(trim($line2) < 0);
$test = new HomeWork1();
$vaule = ($test->calculate(5, 4));

$my_file = 'file.txt';
$handle = fopen($my_file, 'w') or die('Cannot open file:  '.$my_file); //open file for writing ('w','r','a')..
$text = implode(",",$vaule);
fwrite($handle, $text);
echo file_get_contents( "file.txt" );
fclose($handle);
echo "\n";
echo "Thank you, continuing...\n";
