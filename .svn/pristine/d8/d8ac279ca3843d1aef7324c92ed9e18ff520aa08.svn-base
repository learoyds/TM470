<?php

$weekNumber = $_POST['weekSelect'];

$sqlvar = "GET * FROM `menus` WHERE `menus`.`week_number` = $weekNumber";

$resultvar = $con->query($sqlvar);

   if ($resultvar != false){
 while($row = $resultvar->fetch_assoc()){

$mondayMain  = $row['monday_main'];
$mondayPudding = $row['monday_pudding']; 
$tuesdayMain = $row['tuesday_main'];
$tuesdayPudding = $row['tuesday_pudding'];
$wednesdayMain = $row['wednesday_main'];
$wednesdayPudding = $row['wednesday_pudding'];
$thursdayMain = $row['thursday_main'];
$thursdayPudding = $row['thursday_pudding'];
$fridayMain = $row['friday_main'];
$fridayPudding = $row['friday_pudding'];
}
}
?>