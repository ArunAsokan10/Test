<?php
/* Attempt MySQL server connection. Assuming you are running MySQL
server with default setting (user 'root' with no password) */
$link = mysqli_connect("localhost", "root", "", "demo");
 
// Check connection
if($link === false){
    die("ERROR: Could not connect. " . mysqli_connect_error());
}
 
// Escape user inputs for security
$name = mysqli_real_escape_string($link, $_REQUEST['name']);
$qtr = mysqli_real_escape_string($link, $_REQUEST['qtr']);
$mobile = mysqli_real_escape_string($link, $_REQUEST['mobile']);
$potato = mysqli_real_escape_string($link, $_REQUEST['potato']);
$onion = mysqli_real_escape_string($link, $_REQUEST['onion']);
$tomato = mysqli_real_escape_string($link, $_REQUEST['tomato']);
$carrot = mysqli_real_escape_string($link, $_REQUEST['carrot']);
$cauli = mysqli_real_escape_string($link, $_REQUEST['cauli']);
$cabbage = mysqli_real_escape_string($link, $_REQUEST['cabbage']);

 
// Attempt insert query execution
$sql = "INSERT INTO persons (name, qtr, mobile, potato, onion, tomato, carrot, cauli, cabbage) VALUES ('$name', '$qtr', '$mobile','$potato', '$onion', '$tomato', '$carrot', '$cauli', '$cabbage')";
if(mysqli_query($link, $sql)){
    echo "ORDER PLACED SUCCESSFULLY";
} else{
    echo "ERROR: Could not able to execute $sql. " . mysqli_error($link);
}
 

 
// Close connection
mysqli_close($link);
?>