<?php
    include_once 'requestDB.php';
    
    /*$sql = 'UPDATE recipes SET is_today = 0';
    
    mysqli_real_query($con, $sql);*/
    
    $sql1 = 'UPDATE `recipes` SET `is_today` = "1" WHERE `recipes`.`Full_name` = "Pork Casserole Boiled Potatoes and Veg" ';
    
    mysqli_real_query($con, $sql1);
    
    //$sql = 'UPDATE recipes SET is_today = 1 WHERE id = 4'
    
    
    
    
    //$result1 = mysqli_query('SELECT * FROM recipes');
   /* $sql = "SELECT * FROM `recipes";
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
  
  //Create variable starting with the maximum possible number of ingredients

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
   echo "Connection failed: " . $con;
}


    $sql = 'SELECT * FROM recipes';
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
   echo "Connection failed: " . $con;
}*/

?> 