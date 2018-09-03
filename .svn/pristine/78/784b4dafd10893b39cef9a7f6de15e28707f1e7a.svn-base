        <?php
		include_once 'includes/HEAD_Include.php';
		?>
        <title>Menu update</title>
        <?php
		include_once 'includes/HEAD2_Include.php';
		$pageName = "Planning";
        
		include_once 'includes/header_menu.php';
		?>
<div class="content">
            
            <h1>Menu Planning</h1>

    <div class="transDiv">

 <?php


include_once 'includes/requestDB.php';

//$weekSelect= intval($_POST['weekSelect']);

//echo "monday main is " . $_POST['getMonL'];
echo  "</br>";

//include_once '/menus_make_vars.php';


$weekNumber = $_POST['weekSelect'];
echo $weekNumber;
echo "</BR>";
//if(isset($_POST['weekSelect'])){
$mysql = "SELECT * FROM `menus` WHERE `menus`.`week_number` = '$weekNumber'";


$aresult = $con->query($mysql);

   if ($aresult != false){
 //if($con->query($mysql) === true){
 while($arow = $aresult->fetch_assoc()){

$mondayMain  = $arow['monday_main'];
$mondayPudding = $arow['monday_pudding']; 
$tuesdayMain = $arow['tuesday_main'];
$tuesdayPudding = $arow['tuesday_pudding'];
$wednesdayMain = $arow['wednesday_main'];
$wednesdayPudding = $arow['wednesday_pudding'];
$thursdayMain = $arow['thursday_main'];
$thursdayPudding = $arow['thursday_pudding'];
$fridayMain = $arow['friday_main'];
$fridayPudding = $arow['friday_pudding'];
}
}
else{
    echo "NO GO HOSE";
}
//}
echo $thursdayPudding;

if (isset($_POST['getMonL'])){
    $mondayMain = ($_POST['getMonL']);
}
if (isset($_POST['getMonP'])){
    $mondayPudding = ($_POST['getMonP']);
}
if (isset($_POST['getTuesL'])){
    $tuesdayMain = ($_POST['getTuesL']);
}
if (isset($_POST['getTuesP'])){
    $tuesdayPudding = ($_POST['getTuesP']);
}
if (isset($_POST['getWedL'])){
    $wednesdayMain = ($_POST['getWedL']);
}
if (isset($_POST['getWedP'])){
    $wednesdayPudding = ($_POST['getWedP']);
}
if (isset($_POST['getThursL'])){
    $thursdayMain = ($_POST['getThursL']);
}
if (isset($_POST['getThursP'])){
    $thursdayPudding = ($_POST['getThursP']);
}
if (isset($_POST['getFriL'])){
    $fridayMain = ($_POST['getFriL']);
}
if (isset($_POST['getFriP'])){
    $fridayPudding = ($_POST['getFriP']);
}

$sql="UPDATE `menus` 
     SET `monday_main` = '$mondayMain', `monday_pudding` = '$mondayPudding', `tuesday_main` = '$tuesdayMain', `tuesday_pudding` = '$tuesdayPudding', `wednesday_main` = '$wednesdayMain', `wednesday_pudding` = '$wednesdayPudding', `thursday_main` = '$thursdayMain', `thursday_pudding` = '$thursdayPudding', `friday_main` = '$fridayMain', `friday_pudding` = '$fridayPudding'
     WHERE `menus`.`week_number` = '$weekNumber'";

//check the query was successful and print out the result

if ($con->query($sql) === TRUE) {
   echo " You successfully inserted menu data for week number  " . $_POST['weekSelect'];
} else {
    echo "Error: " . $sql . "<br>" . $con->error;
}

$con->close();


?>
              
 
  </div> <br/>


            
            
     <!--       <h2> <span class="red"> <a href="index.php">Back to the beginning</a> </span> </h2> -->
		
        
</div>
        <?php
        include_once 'includes/footer_menu.php';
        ?>