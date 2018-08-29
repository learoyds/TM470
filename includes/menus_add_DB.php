<?php

include_once '/requestDB.php';


echo "monday main is" . $_POST['getMonL'];
echo  "</br>";


$weekSelect= intval($_POST['weekSelect']);
$mondayMain = ($_POST['getMonL']);
$mondayPudding = ($_POST['getMonP']);
//$tuesdayMain = ($_POST['getTuesL']);
//$tuesdayPudding = ($_POST['getTuesP']);

//if ($_POST['weekSelect'] == 1){



$sql = 'UPDATE menus
      SET monday_main = "$mondayMain"
      WHERE week_number= "$weekSelect"';


/*$sql = "REPLACE INTO menus(monday_main, monday_pudding) 
        VALUES ($mondayMain, $mondayPudding)
        WHERE week_number = $weekSelect";*/

if ($con->query($sql) === TRUE) {
    $con->query($sql);
    echo "New record created successfully";
   echo "</br>";
   echo " You inserted menu data for week number  " . $_POST['weekSelect'];
} else {
    echo "Error: " . $sql . "<br>" . $con->error;
}

$con->close();




//$result = $con->query($sql);

 //  if ($result != false){
 //while($row = $result->fetch_assoc()){
  
 //echo $row['monday_main'];
 //}
 //}


?>