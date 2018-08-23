<?php
// Start the session

session_start();

// initiate the variables

$_SESSION['username'];
$_SESSION['password'];

/*check the user name and password against the database to follow and replace the ******** but at this time a user name and password will
be set up here as time limitations have cut short development time and this is for first release.*/

if(($_SESSION['username'] =='chris learoyd') && ($_SESSION['password'] =='party@mine') )

         header("Location:index.php");
else

// set session variables to input
  
$_SESSION['username'] = $_POST['Sign-in'];
$_SESSION['password'] = $_POST['Password']
?>
<?php
    /*I need to check if the user is in the database: 
      $_POST['user'] so something like:*/

?>
<?php
echo '<!DOCTYPE html>
      <html>
      <head>
      <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />

      <link href="CSS/learoyds.css" rel="stylesheet" lang="text" xml:lang="text" title="css"/>
      <link href="CSS/learoydsMob.css" rel="stylesheet" lang="text" xml:lang="text" title="cssMob"/>
      <link rel="shortcut icon" href="assets/favicon_copy.ico" /> 
      <link rel="icon" type="image/png" href="assets/laptopIcon.png" />'
?>
<title>Sign In</title>
<?php 
include_once 'includes/HEAD2_Include.php';
include_once 'includes/HEAD3_Include.php';


/*include_once 'includes/headerInclude.php';*/
?>
<div id='landBody'>
              <article> 
                <header>
                    <h2>Welcome to the Local School Dinners App</h2>
                    <h1>Please Sign In</h1>
                </header>

<form id='sign-in' action='SignIn.php' method='post'>


					<div>
					     </br>
					     <input type='text' list="credentials" id='sign-in-name' placeholder='User Name' name='Sign-in' pattern="chris learoyd" autocomplete="off"/>
						 </br></br>
					     <input type='password' list="credentials" id='sign-in-password' placeholder='Password' name="Password" pattern="party@mine" autocomplete="off"/>
						 </br></br>
						 <button type='submit' value='Run' name='submit'>Submit</button>
				    </div>
					    
 </form>

 <?php

function toIndex()
{
  header("Location:index.php");
}

if(array_key_exists('submit',$_POST)){
   toIndex();
}

?>

                <p id='summary'>Site under construction, please try it out...</p>
            </article>

<footer>
                <ul id='errorlog'></ul>
</footer>






<?php
     /*include_once 'includes/footerInclude.php';*/
?>