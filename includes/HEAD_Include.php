<?php

$lifetime=600;
  session_start();
  setcookie(session_name(),session_id(),time()+$lifetime);

$_SESSION['username'];
$_SESSION['password'];

if ( (basename($_SERVER['PHP_SELF']) != 'SignIn.php') && (($_SESSION['username'] != 'chris learoyd') || ($_SESSION['password'] != 'party@mine')) ){

         header('Location:SignIn.php');
/* possibly better to find the page: basename($_SERVER["REQUEST_URI"], ".php") */
}
else{

echo '<!DOCTYPE html>
      <html lang="en">
      <head>
      <meta charset="utf-8">
      <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
      <link href="CSS/learoyds.css" rel="stylesheet" lang="text" xml:lang="text" title="css"/>
      <link href="CSS/learoydsMob.css" rel="stylesheet" lang="text" xml:lang="text" title="cssMob"/>
      <link rel="shortcut icon" href="assets/HMPfavicon.ico" /> 
      <link rel="icon" type="image/png" href="assets/HMPfavicon.ico" />';
	 }
?>

