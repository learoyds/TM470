       <?php
		include_once 'includes/HEAD_Include.php';
		?>
        <title>Today's recipe</title>
        <?php
		include_once 'includes/HEAD2_Include.php';
		$pageName = "recipesToday";
        
		include_once 'includes/header_recipes.php';
		?>
<div class="content">
		       <h1>Today's Recipe</h1>

<div class="transDiv">

<?php
     $day = Date('d');
     $month = Date('m');
     $year = Date('y');
     //$dow = date("N",strtotime());
     echo  "  " . $day . "/" . $month . "/20" . $year;
     echo "</br></br>"
     //echo Date('w');
?>

<?php

include_once 'includes/requestDB.php';

//Get this weeks menu and assign variables

$sql = 'SELECT * FROM menus WHERE is_this_week = 1';
$result = $con->query($sql);

   if ($result != false){
 while($row = $result->fetch_assoc()){
  
  $monM = $row['monday_main'];      
  $monP = $row['monday_pudding'];
  
  $tueM = $row['tuesday_main'];    
  $tueP = $row['tuesday_pudding'];
  $wedM = $row['wednesday_main'];    
  $wedP = $row['wednesday_pudding'];
  $thuM = $row['thursday_main'];    
  $thuP = $row['thursday_pudding'];
  $friM = $row['friday_main'];    
  $friP = $row['friday_pudding'];
   if(Date('w') == 1 || 6 || 0){
       $todayM = $monM;
       $todayP = $monP;
}
if(Date('w') == 2){
       $todayM = $tueM;
       $todayP = $tueP;
}
if(Date('w') == 3){
       $todayM = $wedM;
       $todayP = $wedP;
}
if(Date('w') == 4){
       $todayM = $thuM;
       $todayP = $thuP;
}
if(Date('w') == 5){
       $todayM = $friM;
       $todayP = $friP;
}
}}
$result->free();

// echo Date('w');
?>
   
<?php

    include_once 'includes/requestDB.php';

     $sql = "SELECT * FROM `recipes` WHERE `recipes` . `Full_name` = '$todayM'";
     $result = $con->query($sql);

   if ($result != false){
    while($row = $result->fetch_assoc()){
  echo "<table class='menu_tables'>";
  echo    "<tr>";
  echo         "<th> Todays Main </th>";
  echo         "<td>" . $row['Full_name'] . "</td>";    
  
  echo   "</tr>
      <tr>";
  echo         "<td> How its Done </td>";    
  echo         "<td>" . $row['method'] . "</td>";
  echo   "</tr>";
  
  //Create vatiable starting with the maximum possible number of ingredients

  $size = 11;
  
  for($i = 1; $i <= $size; $i++){
  
    $rowName = "ingredient_" . $i;
    if ($row[$rowName] != ""){
    echo "<tr><td>Ingredient  $i </td><td>$row[$rowName]</td>";
    echo "</tr>";
   }}
    echo "</table>";   //ingredient_1
  }}
  else {
   die("Connection failed: " . $con->connect_error);
}


    $sql = "SELECT * FROM `recipes` WHERE `recipes` . `Full_name` = '$todayP'";
    $result = $con->query($sql);

   if ($result != false){
    while($row = $result->fetch_assoc()){
  echo "</br><table class='menu_tables'>";
  echo    "<tr>";
  echo         "<th> Todays Pudding </th>";
  echo         "<td>" . $row['Full_name'] . "</td>";    
  
  echo   "</tr>
      <tr>";
  echo         "<td> How its Done </td>";    
  echo         "<td>" . $row['method'] . "</td>";
  echo   "</tr>";
  
  //Create vatiable starting with the maximum possible number of ingredients

  $size = 11;
  
  for($i = 1; $i <= $size; $i++){
  
    $rowName = "ingredient_" . $i;
    if ($row[$rowName] != ""){
    echo "<tr><td>Ingredient  $i </td><td>$row[$rowName]</td>";
    echo "</tr>";
   }}
    echo "</table>";   //ingredient_1
  }}
  else {
   die("Connection failed: " . $con->connect_error);
}

?> 
    </div>          
             <br/> 
                                     
               <h2> <span class="red"> <a href="index.php">Back to the beginning</a> </span></h2>
        
</div>
        <?php
        include_once 'includes/footer_recipes.php';
        ?>