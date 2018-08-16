<?php

$username = "chrislearoyd";
$password = "je11y8e@N";

$conn = mysqli_connect("localhost", $username, $password, "school_app");
if ($conn->connect_error) {
     die("Connection failed: " . $conn->connect_error);
}else{
	echo "OK!";
	}
echo 'hello from the connectDB page';
?>



