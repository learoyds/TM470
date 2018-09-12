<?php

include_once 'includes/requestDB.php';
echo "<form action = 'ingredients_new_DB.php' method = 'POST' name='newIngredient'>";
           
echo "<table id='recipe_table' class='menu_tables' > ";

echo "<tr><td>Enter an Ingredient Name</br>
<input type='text' name = 'getName' autofocus  maxlength='45' style='color: white; background-color: black;'></td></tr>";

echo "<tr><td>Enter a Supplier Name</br>";
echo "<select name='supplier' style='word-break:break-word; color:white; width:100%; max-width:75% ;background-color:black; font-size: 1em; border-color:black;'>
           <option selected disabled hidden value='Choose'>Choose</option> ";
$sql="SELECT * FROM suppliers";
$result = $con -> query ($sql);
  while ($row = $result->fetch_assoc()){          
  
echo "<option value = '" . $row['name'] . "'>" . $row['name'] . "</option>";
 } 
$result->free();     
echo "</select></td></tr>";
  echo   "<tr><td>Price</br>";
  echo "<input type='text' name = 'getPrice' value ='00.00'   size = '30px' height='45px' maxlength='45' style='color: white; background-color: black;'> for:  ";
  echo "<input type='text' name = 'getAmount' value ='Amount'   size = '30px' height='45px' maxlength='45' style='color: white; background-color: black;'> in:  ";
  echo "<select name='getUnit' style='word-break:break-word; color:white; width:30%; max-width:25% ;background-color:black; font-size: 1em; border-color:black;'>
           <option selected disabled hidden value='Units'>Units</option> ";
$sql="SELECT * FROM ingredients";
$result = $con -> query ($sql);
  while ($row = $result->fetch_assoc()){          
  
    echo "<option value = '" . $row['units'] . "'>" . $row['units'] . "</option>";
 } 
$result->free();     
echo "</select>
             </td></tr>";
/*
echo         " <tr><td>Ingredient 2</br>";
  echo "<select name='getIng2' style='word-break:break-word; color:white; width:100%; max-width:90% ;background-color:black; font-size: 1em; border-color:black;'>
           <option selected disabled hidden value='Choose'>Choose</option> ";
$sql="SELECT * FROM ingredients";
$result = $con -> query ($sql);
  while ($row = $result->fetch_assoc()){          
  
    echo "<option value = '" . $row['name'] . "'>" . $row['name'] . "</option>";
 } 
$result->free();     
echo "</select></td></tr>";
echo         " <tr><td>Ingredient 3</br>";
  echo "<select name='getIng3' style='word-break:break-word; color:white; width:100%; max-width:90% ;background-color:black; font-size: 1em; border-color:black;'>
           <option selected disabled hidden value='Choose'>Choose</option> ";
$sql="SELECT * FROM ingredients";
$result = $con -> query ($sql);
  while ($row = $result->fetch_assoc()){          
  
    echo "<option value = '" . $row['name'] . "'>" . $row['name'] . "</option>";
 } 
$result->free();     
echo "</select>";

echo "</td> </tr>*/
echo "</table><br/> 
                                     
<h2> <span class='red'> <button type = 'submit' formmethod= 'post' name='submit'>Submit</button></span> </h2> 
 </form> "; 



  ?>