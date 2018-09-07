

<?php

  
    $sql = "SELECT * FROM `recipes` WHERE `recipes` . `Full_name` = '$theRecipe'";
    $result = $con->query($sql);

   if ($result != false){
    while($row = $result->fetch_assoc()){
  echo "</br><table class='menu_tables'>";
  echo    "<tr>";
  echo         "<th> Chosen Main </th>";
  echo         "<td>" . $row['Full_name'] . "</td>";    
  
  echo   "</tr>
      <tr>";
  echo         "<td> How its Done </td>";    
  echo         "<td>" . $row['method'] . "</td>";
  echo   "</tr>";
 
  $size = 11;
  $rowNameArray = array();
  for($i = 0; $i < $size; $i++){
  $rowName = "ingredient_" . ($i + 1);
  if ($row[$rowName] != ""){
     $rowNameArray[] = $row[$rowName];
     //echo $rowNameArray;
     $ingNo = $i + 1;
 echo "<tr><td>Ingredient $ingNo</td>";
       
 echo   "<td>
<select name='getIng . $i .' style='word-break:break-word; color:white; width:100%; max-width:90% ;background-color:black; font-size: 1em; border-color:black;'>
<option selected disabled hidden value = '" . $row[$rowName] . "'>" . $row[$rowName] . "</option> ";

$sql1="SELECT * FROM ingredients";
$result1 = $con -> query ($sql1);
  while ($row1 = $result1->fetch_assoc()){          
  
    echo "<option value = '" . $row1['name'] . "'>" . $row1['name'] . "</option>";
 } 
$result1->free();     
echo "</select>";
  echo "</td></tr>";
   }}
    echo "</table>";   //ingredient_1
  }}
  else {
   die("Connection failed: " . $con->connect_error);
}  
 
//var_dump($rowNameArray);
  
  
/*  

  $size = 11;
  
  for($i = 1; $i <= $size; $i++){
  
    $rowName = "ingredient_" . $i;
    if ($row[$rowName] != ""){
    echo "<tr><td>Ingredient  $i </td>";
 echo   "<td>
<select name='getIng . $i .' style='word-break:break-word; color:white; width:100%; max-width:90% ;background-color:black; font-size: 1em; border-color:black;'>
<option selected disabled hidden value = '" . $row[$rowName] . "'>" . $row[$rowName] . "</option> ";
$sql="SELECT * FROM ingredients";
$result = $con -> query ($sql);
  while ($row = $result->fetch_assoc()){          
  
    echo "<option value = '" . $row['name'] . "'>" . $row['name'] . "</option>";
 } 
$result->free();     
echo "</select>";
  echo "</td></tr>";
   }}
    echo "</table>";   //ingredient_1
  }}
  else {
   die("Connection failed: " . $con->connect_error);
} */
  //Create vatiable starting with the maximum possible number of ingredients
/*
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
*/
?>

              