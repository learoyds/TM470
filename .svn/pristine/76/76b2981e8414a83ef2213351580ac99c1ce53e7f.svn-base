<?php
/*$cookie_name = "weekNumber";
$cookie_value = 0;
setcookie($cookie_name, $cookie_value, time() + (86400 * 30), "/"); // 86400 = 1 day

  $weekNo;
  $monLunch;
  $monPudding;
  $tuesLunch;
  $tuesPudding;


echo "the page number is set to " . $_COOKIE[$cookie_name];
*/
echo "<form action = 'menus_add_DB.php' method = 'POST' name='menuPlan'>";

           
echo "<table id='daily_table' class='menu_tables' > 

       <tr>      <th class='table_title'>
    <div>
        <label for='start'>Week Starting Date</label>
        <input type='date' id='start' name='weekStart'
               value='2018-09-02'
               min='2018-01-01' max='2019-09-01' />
    </div></th> 
             <td>   <select id='week' name='weekSelect' onchange=' ' style='word-break:break-word; float:left; color:#6F0; font-weight:bold; width:100%; max-width:50% ; background-color:black; font-size:1em;border-color:black;'>
                   <option selected disabled hidden value='Number'>Number</option>
                   <option value='1'> 1 </option>
                   <option value='2'> 2 </option>
                   <option value='3'> 3 </option> 
                </select>  </td>
             </tr>
    <!--  <tr>
           
           <th>Main</th>
           <th>Pudding</th>
      </tr>-->"; 
      
    //      <th style='word-break:break-word;'></th>
  echo         " <tr><td>Monday </br>";
  echo "<select name='getMonL' style='word-break:break-word; color:white; width:100%; max-width:90% ;background-color:black; font-size: 1em; border-color:black;'>
           <option selected disabled hidden value='Main'>Main</option> ";
$sql="SELECT * FROM recipes name where is_pudding = 0";
$result = $con -> query ($sql);
  while ($row = $result->fetch_assoc()){          
  
    echo "<option value = '" . $row['Full_name'] . "'>" . $row['Full_name'] . "</option>";
 } 
$result->free();     
echo "</select>";

echo "</td>";      
  echo         "<td>Monday </br>";

echo "<select name='getMonP' style='color:white; width:100%; max-width:90% ; background-color:black; font-size:1em;border-color:black;'>
         <option selected disabled hidden value='Pudding'>Pudding</option> ";
$sql="SELECT * FROM recipes name where is_pudding = 1";
$result = $con -> query ($sql);
  while ($row = $result->fetch_assoc()){          
  
    echo "<option value = '" . $row['Full_name'] . "'>" . $row['Full_name'] . "</option>";
 } 
$result->free();     
echo "</select>";


echo "</td>";    
  echo   "</tr>";
    //       <th style='word-break:break-word;'> </th>
  echo         "<tr> <td>Tuesday </br>";

echo "<select name='getTuesL' style='color:white; width:100%; max-width:90% ; background-color:black; font-size:1em;border-color:black;'>
         <option selected disabled hidden value='Main'>Main</option> ";
$sql="SELECT * FROM recipes name where is_pudding = 0";
$result = $con -> query ($sql);
  while ($row = $result->fetch_assoc()){          
  
    echo "<option value = '" . $row['Full_name'] . "'>" . $row['Full_name'] . "</option>";
 } 
$result->free();     
echo "</select>";


echo "</td>";    
  echo         "<td>Tuesday </br>";

echo "<select name='getTuesP' style='color:white; width:100%; max-width:90% ; background-color:black; font-size:1em;border-color:black;'>
         <option selected disabled hidden value='Pudding'>Pudding</option> ";
$sql="SELECT * FROM recipes name where is_pudding = 1";
$result = $con -> query ($sql);
  while ($row = $result->fetch_assoc()){          
  
    echo "<option value = '" . $row['Full_name'] . "'>" . $row['Full_name'] . "</option>";
 } 
$result->free();     
echo "</select>";


echo "</td>";    
 echo   "</tr>";
  //         <th style='word-break:break-word;'></th>
  echo         "<tr> <td>Wednesday </br>";

echo "<select name='getWedL' style='color:white;width:100%; max-width:90% ; background-color:black; font-size:1em;border-color:black;'>
         <option selected disabled hidden value='Main'>Main</option> ";
$sql="SELECT * FROM recipes name where is_pudding = 0";
$result = $con -> query ($sql);
  while ($row = $result->fetch_assoc()){          
  
    echo "<option value = '" . $row['Full_name'] . "'>" . $row['Full_name'] . "</option>";
 } 
$result->free();     
echo "</select>";


echo "</td>";    
    
  echo         "<td>Wednesday </br>";

echo "<select name='getWedP' style='color:white;width:100%; max-width:90% ; background-color:black; font-size:1em;border-color:black;'>
         <option selected disabled hidden value='Pudding'>Pudding</option> ";
$sql="SELECT * FROM recipes name where is_pudding = 1";
$result = $con -> query ($sql);
  while ($row = $result->fetch_assoc()){          
  
    echo "<option value = '" . $row['Full_name'] . "'>" . $row['Full_name'] . "</option>";
 } 
$result->free();     
echo "</select>";


echo "</td>";    
  echo   "</tr>";
    //        <th style='word-break:break-word;'></th>
  echo         "<tr>  <td>Thursday </br>";

echo "<select name='getThursL' style='color:white;width:100%; max-width:90% ; background-color:black; font-size:1em;border-color:black;'>
         <option selected disabled hidden value='Main'>Main</option> ";
$sql="SELECT * FROM recipes name where is_pudding = 0";
$result = $con -> query ($sql);
  while ($row = $result->fetch_assoc()){          
  
    echo "<option value = '" . $row['Full_name'] . "'>" . $row['Full_name'] . "</option>";
 } 
$result->free();     
echo "</select>";


echo "</td>";    
  echo         "<td>Thusday </br>";

echo "<select name='getThursP' style='color:white;width:100%; max-width:90% ; background-color:black; font-size:1em;border-color:black;'>
         <option selected disabled hidden value='Pudding'>Pudding</option> ";
$sql="SELECT * FROM recipes name where is_pudding = 1";
$result = $con -> query ($sql);
  while ($row = $result->fetch_assoc()){          
  
    echo "<option value = '" . $row['Full_name'] . "'>" . $row['Full_name'] . "</option>";
 } 
$result->free();     
echo "</select>";


echo "</td>";    
   echo   "</tr>";
        //   <th style='word-break:break-word;'></th>
  echo         " <tr>  <td>Friday </br>";

echo "<select name='getFriL' style='color:white;width:100%; max-width:90% ;background-color:black; font-size:1em;border-color:black;'>
         <option selected disabled hidden value='Main'>Main</option> ";
$sql="SELECT * FROM recipes name where is_pudding = 0";
$result = $con -> query ($sql);
  while ($row = $result->fetch_assoc()){          
  
    echo "<option value = '" . $row['Full_name'] . "'>" . $row['Full_name'] . "</option>";
 } 
$result->free();     
echo "</select>";


echo "</td>";        
  echo         "<td>Friday </br>";

echo "<select name='getFriP' style='color:white;width:100%; max-width:90% ; background-color:black; font-size:1em;border-color:black;'>
         <option selected disabled hidden value='Pudding'>Pudding</option> ";
$sql="SELECT * FROM recipes name where is_pudding = 1";
$result = $con -> query ($sql);
  while ($row = $result->fetch_assoc()){          
  
    echo "<option value = '" . $row['Full_name'] . "'>" . $row['Full_name'] . "</option>";
 } 
$result->free();     
echo "</select>";



echo "</td>";    
 echo     "</tr>
 </table>
";

 $con->close();  

echo "<br/> <h2> <span class='red'> <button type = 'submit' formmethod= 'post' name='submit'>Submit</button> </span> </h2> 
  </form>";


?> 