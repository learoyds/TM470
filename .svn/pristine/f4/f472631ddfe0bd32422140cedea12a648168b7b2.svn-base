

<?php
// query the recipes database table

    $sql = "SELECT * FROM `recipes` WHERE `recipes` . `Full_name` = '$theRecipe'";
    $result = $con->query($sql);

// if the query is ok loop through thte fields of the display table

   if ($result != false){
    while($row = $result->fetch_assoc()){
  echo "</br>";
  echo "<form  action='/recipesEditDB.php' method='post' name = 'recipesEditForm'>";
  echo "<input type='hidden' id='recipeID' name='theRecipe' value='$theRecipe'>";
  
  echo "<table class='menu_tables'>";
  echo    "<tr>";
  echo         "<th> Chosen Main </th>";
  echo         "<td>" . $row['Full_name'] . "</td>";    
  echo   "</tr>
      <tr>";
  echo         "<td> How its Done </td>";    
  echo         "<td>" . $row['method'] . "</td>";
  $method = $row['method'];
  echo "<input type='hidden' id= 'howToID' name= 'method' value = '$method'";
  echo   "</tr>";
// set a variable to the number of possibe ingredients 
  $size = 11;
// iterate through the ingredients table using a for loop  
  for($i = 1; $i <= $size; $i++){
  $rowName = "ingredient_" . $i;
  $selectName = "getIng" . $i;

 echo "<tr><td>Ingredient $i</td>";
 // use output from recipe sql for the displayed value of the select element     
 echo   "<td>
<select name='$selectName' style='word-break:break-word; color:white; width:100%; max-width:90% ;background-color:black; font-size: 1em; border-color:black;'>
<option selected hidden value = '" . $row[$rowName] . "'>" . $row[$rowName] . "</option> ";

// create a list from the ingredients database table and assign it to a select option

$sql1="SELECT * FROM ingredients";
$result1 = $con -> query ($sql1);
  while ($row1 = $result1->fetch_assoc()){          
  
    echo "<option value = '" . $row1['name'] . "'>" . $row1['name'] . "</option>";
 } 
// free up the result until the next time round the loop

$result1->free();     
echo "</select>";
  echo "</td></tr>";
   }
    echo "</table></br></br>";   //button to send the form to another page for php sql function
echo "<h2> <span class='red'> <button type = 'submit' formmethod= 'post' name='submitEdit'>Submit</button></span> </h2>";
echo "</form>";
  }}
  else {
   die("Connection failed: " . $con->connect_error);
}  
 

?>

              