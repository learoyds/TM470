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
echo "<form action = 'menuPlan.php' method = 'POST' name='menuPlan'>";
echo "<table id='daily_table' class='menu_tables' >
      <tr>
           <th class='table_title'>Week <select id='week' name='weekSelect' onchange=' ' style='word-break:break-word; color:#6F0; font-weight:bold;  background-color:black; font-size:1em;border-color:black;'>
                   <option selected disabled hidden value='No?'>No?</option>
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
  echo "<select name='getMonL' style='word-break:break-word; color:white; background-color:black; font-size:1em;border-color:black;'>
           <option selected disabled hidden value='Choose mains'>Choose mains</option> ";
$sql="SELECT * FROM recipes name where is_pudding = 0";
$result = $con -> query ($sql);
  while ($row = $result->fetch_assoc()){          
  
    echo "<option value = '" . $row['name'] . "'>" . $row['name'] . "</option>";
 } 
$result->free();     
echo "</select>";

echo "</td>";      
  echo         "<td>";

echo "<select name='getMonP' style='color:white; background-color:black; font-size:1em;border-color:black;'>
         <option selected disabled hidden value='Choose puddings'>Choose puddings</option> ";
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

echo "<select name='getTuesL' style='color:white; background-color:black; font-size:1em;border-color:black;'>
         <option selected disabled hidden value='Choose mains'>Choose mains</option> ";
$sql="SELECT * FROM recipes name where is_pudding = 0";
$result = $con -> query ($sql);
  while ($row = $result->fetch_assoc()){          
  
    echo "<option value = '" . $row['name'] . "'>" . $row['name'] . "</option>";
 } 
$result->free();     
echo "</select>";


echo "</td>";    
  echo         "<td>";

echo "<select name='getTuesP' style='color:white; background-color:black; font-size:1em;border-color:black;'>
         <option selected disabled hidden value='Choose puddings'>Choose puddings</option> ";
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

echo "<select name='getWedL' style='color:white; background-color:black; font-size:1em;border-color:black;'>
         <option selected disabled hidden value='Choose mains'>Choose mains</option> ";
$sql="SELECT * FROM recipes name where is_pudding = 0";
$result = $con -> query ($sql);
  while ($row = $result->fetch_assoc()){          
  
    echo "<option value = '" . $row['name'] . "'>" . $row['name'] . "</option>";
 } 
$result->free();     
echo "</select>";


echo "</td>";    
    
  echo         "<td>";

echo "<select name='getWedP' style='color:white; background-color:black; font-size:1em;border-color:black;'>
         <option selected disabled hidden value='Choose puddings'>Choose puddings</option> ";
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

echo "<select name='getThursL' style='color:white; background-color:black; font-size:1em;border-color:black;'>
         <option selected disabled hidden value='Choose mains'>Choose mains</option> ";
$sql="SELECT * FROM recipes name where is_pudding = 0";
$result = $con -> query ($sql);
  while ($row = $result->fetch_assoc()){          
  
    echo "<option value = '" . $row['name'] . "'>" . $row['name'] . "</option>";
 } 
$result->free();     
echo "</select>";


echo "</td>";    
  echo         "<td>";

echo "<select name='getThursP' style='color:white; background-color:black; font-size:1em;border-color:black;'>
         <option selected disabled hidden value='Choose puddings'>Choose puddings</option> ";
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

echo "<select name='getFriL' style='color:white; background-color:black; font-size:1em;border-color:black;'>
         <option selected disabled hidden value='Choose mains'>Choose mains</option> ";
$sql="SELECT * FROM recipes name where is_pudding = 0";
$result = $con -> query ($sql);
  while ($row = $result->fetch_assoc()){          
  
    echo "<option value = '" . $row['name'] . "'>" . $row['name'] . "</option>";
 } 
$result->free();     
echo "</select>";


echo "</td>";        
  echo         "<td>";

echo "<select name='getFriP' style='color:white; background-color:black; font-size:1em;border-color:black;'>
         <option selected disabled hidden value='Choose puddings'>Choose puddings</option> ";
$sql="SELECT * FROM recipes name where is_pudding = 1";
$result = $con -> query ($sql);
  while ($row = $result->fetch_assoc()){          
  
    echo "<option value = '" . $row['name'] . "'>" . $row['name'] . "</option>";
 } 
$result->free();     
echo "</select>";


echo "</td>";    
 echo     "</tr>
 </table>
";

   

echo "<br/> <h2> <span class='red'> <button type = 'submit' value= 'Run' name='submit'>Submit</button> </span> </h2> 
  </form>";

  $weekNo = $_POST['weekSelect']; // week selected is now held in a variable - $weekNo, and use this to update database
  $monLunch = $_POST['getMonL'];
  $monPudding = $_POST['getMonP'];
  $tuesLunch = $_POST['getTuesL'];
  $tuesPudding = $_POST['getTuesP'];
   
// need an if post has happened to avoid null answers

  if (isset($weekNo) && ($monLunch) && ($monPudding) && ($tuesLunch) && ($tuesPudding))
  {
     echo 'Well done! Form has been submitted successfully.';
  }
  else
  {
     echo 'SNAP! please fill all the required fields.';
  };
//UPDATE menus
//SET whatever I called the monday lunch in them database=$weekNo, monday pudding in db = 
// WHERE week = $weekNo

?> 