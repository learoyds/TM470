<?php

$sql = 'SELECT * FROM menus WHERE is_this_week = 1';
$result = $con->query($sql);

   if ($result != false){
 while($row = $result->fetch_assoc()){
  
  echo "<table id='daily_table' class='menu_tables' >
      <tr>
           <th class='table_title'>Week 1</th>
           <th>Main</th>
           <th>Pudding</th>
      </tr> 
      <tr>
           <th>Monday</th>";
  echo         "<td>" . $row['monday_main'] . "</td>"; 

/*  echo         "<td>";
  echo "<select name='getMonL' style='word-break:break-word; color:white; background-color:black; font-size:1em;border-color:black;'>
           <option selected disabled hidden value='Choose mains'>Choose mains</option> ";
$sql="SELECT * FROM recipes name where is_pudding = 0";
$result = $con -> query ($sql);
  while ($row = $result->fetch_assoc()){          
  
    echo "<option value = '" . $row['name'] . "'>" . $row['name'] . "</option>";
 } 
$result->free();     
echo "</select>";

echo "</td>"; */

     
  echo         "<td>" . $row['monday_pudding'] . "</td>";
  echo   "</tr>
      <tr>      <th>Tuesday</th>";
  echo         "<td>" . $row['tuesday_main'] . "</td>";    
  echo         "<td>" . $row['tuesday_pudding'] . "</td>";
 echo   "</tr>
      <tr>      <th>Wednesday</th>";
  echo         "<td>" . $row['wednesday_main'] . "</td>";    
  echo         "<td>" . $row['wednesday_pudding'] . "</td>";
  echo   "</tr>
      <tr>      <th>Thursday</th>";
  echo         "<td>" . $row['thursday_main'] . "</td>";    
  echo         "<td>" . $row['thursday_pudding'] . "</td>";
   echo   "</tr>
      <tr>      <th>Friday</th>";
  echo         "<td>" . $row['friday_main'] . "</td>";    
  echo         "<td>" . $row['friday_pudding'] . "</td>";
 echo     "</tr>
 </table>";   
}
}

$con->close();

?>