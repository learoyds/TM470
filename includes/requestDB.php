<?php
//create the necessary variables for the connection

$username = "chrislearoyd";
$password = "je11y8e@N";
$server = "localhost";
$database = "school_app";

//create a connection variable

$con = mysqli_connect($server, $username, $password, $database);

//Check to test the connection - comment back in to test
 
/*if ($con->connect_error) {
    die("Connection failed: " . $con->connect_error);
  }else{
   	echo "OK, good job! you connected to the database!!"
  };*/

// kill the connection - comment back in if testing the connection

//$con->close();


?>

