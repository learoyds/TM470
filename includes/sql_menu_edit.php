<?php




echo "<table id='daily_table' class='menu_tables' >
      <tr>
           <th class='table_title'>Week <select name='weekSelect' style='word-break:break-word; color:#6F0; font-weight:bold;  background-color:black; font-size:1em;border-color:black;'>
                   <option value='1'> 1 </option>
                   <option value='2'> 2 </option>
                   <option value='3'> 3 </option> </select>
           </th>
           <th>Main</th>
           <th>Pudding</th>
      </tr> 
      <tr>
           <th style='word-break:break-word;'>Monday</th>";
  echo         "<td>";
  echo "<select name='getMonL' style='word-break:break-word; color:white; background-color:black; font-size:1em;border-color:black;'>";
$sql="SELECT * FROM recipes name where is_pudding = 0";
$result = $con -> query ($sql);
  while ($row = $result->fetch_assoc()){          
  
    echo "<option value = '" . $row['name'] . "'>" . $row['name'] . "</option>";
 } 
$result->free();     
echo "</select>";

echo "</td>";      
  echo         "<td>";

echo "<select name='getMonP' style='color:white; background-color:black; font-size:1em;border-color:black;'>";
$sql="SELECT * FROM recipes name where is_pudding = 1";
$result = $con -> query ($sql);
  while ($row = $result->fetch_assoc()){          
  
    echo "<option value = '" . $row['name'] . "'>" . $row['name'] . "</option>";
 } 
$result->free();     
echo "</select>";


echo "</td>";    
  echo   "</tr>
      <tr>      <th style='word-break:break-word;'>Tuesday </th>";
  echo         "<td>";

echo "<select name='getTuesL' style='color:white; background-color:black; font-size:1em;border-color:black;'>";
$sql="SELECT * FROM recipes name where is_pudding = 0";
$result = $con -> query ($sql);
  while ($row = $result->fetch_assoc()){          
  
    echo "<option value = '" . $row['name'] . "'>" . $row['name'] . "</option>";
 } 
$result->free();     
echo "</select>";


echo "</td>";    
  echo         "<td>";

echo "<select name='getTuesP' style='color:white; background-color:black; font-size:1em;border-color:black;'>";
$sql="SELECT * FROM recipes name where is_pudding = 1";
$result = $con -> query ($sql);
  while ($row = $result->fetch_assoc()){          
  
    echo "<option value = '" . $row['name'] . "'>" . $row['name'] . "</option>";
 } 
$result->free();     
echo "</select>";


echo "</td>";    
 echo   "</tr>
      <tr>      <th style='word-break:break-word;'>Wednesday</th>";
  echo         "<td>";

echo "<select name='getWedL' style='color:white; background-color:black; font-size:1em;border-color:black;'>";
$sql="SELECT * FROM recipes name where is_pudding = 0";
$result = $con -> query ($sql);
  while ($row = $result->fetch_assoc()){          
  
    echo "<option value = '" . $row['name'] . "'>" . $row['name'] . "</option>";
 } 
$result->free();     
echo "</select>";


echo "</td>";    
    
  echo         "<td>";

echo "<select name='getWedP' style='color:white; background-color:black; font-size:1em;border-color:black;'>";
$sql="SELECT * FROM recipes name where is_pudding = 1";
$result = $con -> query ($sql);
  while ($row = $result->fetch_assoc()){          
  
    echo "<option value = '" . $row['name'] . "'>" . $row['name'] . "</option>";
 } 
$result->free();     
echo "</select>";


echo "</td>";    
  echo   "</tr>
      <tr>      <th style='word-break:break-word;'>Thursday</th>";
  echo         "<td>";

echo "<select name='getThursL' style='color:white; background-color:black; font-size:1em;border-color:black;'>";
$sql="SELECT * FROM recipes name where is_pudding = 0";
$result = $con -> query ($sql);
  while ($row = $result->fetch_assoc()){          
  
    echo "<option value = '" . $row['name'] . "'>" . $row['name'] . "</option>";
 } 
$result->free();     
echo "</select>";


echo "</td>";    
  echo         "<td>";

echo "<select name='getThursP' style='color:white; background-color:black; font-size:1em;border-color:black;'>";
$sql="SELECT * FROM recipes name where is_pudding = 1";
$result = $con -> query ($sql);
  while ($row = $result->fetch_assoc()){          
  
    echo "<option value = '" . $row['name'] . "'>" . $row['name'] . "</option>";
 } 
$result->free();     
echo "</select>";


echo "</td>";    
   echo   "</tr>
      <tr>      <th style='word-break:break-word;'>Friday</th>";
  echo         "<td>";

echo "<select name='getFriL' style='color:white; background-color:black; font-size:1em;border-color:black;'>";
$sql="SELECT * FROM recipes name where is_pudding = 0";
$result = $con -> query ($sql);
  while ($row = $result->fetch_assoc()){          
  
    echo "<option value = '" . $row['name'] . "'>" . $row['name'] . "</option>";
 } 
$result->free();     
echo "</select>";


echo "</td>";        
  echo         "<td>";

echo "<select name='getFriP' style='color:white; background-color:black; font-size:1em;border-color:black;'>";
$sql="SELECT * FROM recipes name where is_pudding = 1";
$result = $con -> query ($sql);
  while ($row = $result->fetch_assoc()){          
  
    echo "<option value = '" . $row['name'] . "'>" . $row['name'] . "</option>";
 } 
$result->free();     
echo "</select>";


echo "</td>";    
 echo     "</tr>
 </table>";

echo "<br/> <h2> <span class='red'> <a href=''>Save</a> </span> </h2> ";
  
?> 