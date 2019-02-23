<?php
include 'config.php';

//Function to check file extension
function is_dem($file) {
    return preg_match('/.*\.txt/', $file) > 0;
}
//List results
$list = ftp_nlist($conn_id, $path);
//Rewrite array key in numerical order
$filtered = array_values(array_filter($list, is_dem));
//File to save our results
$file = "database.txt";
//Clean the file first
file_put_contents($file, "");
//Open File
$handle = fopen($file, "w") or die("Cannot open file:  ".$file);
//Serialize Data for further uses
$serializedData = serialize($filtered);
//Write on data
file_put_contents($file, $serializedData);
//Closing file
fclose($handle);
//Closing connection
ftp_close($conn_id);
//Redirect to homepage
header("Location: /index.php");

?>