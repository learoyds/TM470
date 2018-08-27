  <?php

$sql = 'SELECT * FROM menus WHERE week_number = 2';
$result = $con->query($sql);

   if ($result != false){
 while($row = $result->fetch_assoc()){
  if( $row_number = 2){
  echo "<table id='daily_table' class='menu_tables' >
      <tr>
           <th class='table_title'>Week 2</th>
           <th>Main</th>
           <th>Pudding</th>
      </tr> 
	  
      <tr>
           <th>Monday</th>";
  echo         "<td>" . $row['monday_main'] . "</td>";  
  echo         "<td>" . $row['monday_pudding'] . "</td>";
  echo   "</tr>";
  echo    "<tr>
	      <th>Change Monday to</th>
				<td><select name='getMonL' style='word-break:break-word; color:white; background-color:black; font-size:1em;border-color:black;'>
           <option selected disabled hidden value='Choose mains'>Choose a new main</br></option> ";
       $sql1="SELECT * FROM recipes name where is_pudding = 0";
       $result1 = $con -> query ($sql1);
       while ($row1 = $result1->fetch_assoc()){          
  
               echo "<option value = '" . $row1['name'] . "'>" . $row1['name'] . "</option>";
       } 
           
 echo "</select>";

 echo "</td>";
 echo "<td><select name='getMonL' style='word-break:break-word; color:white; background-color:black; font-size:1em;border-color:black;'>
           <option selected disabled hidden value='Choose mains'>Choose mains</option> ";
       $sql1="SELECT * FROM recipes name where is_pudding = 0";
       $result1 = $con -> query ($sql1);
       while ($row1 = $result1->fetch_assoc()){          
  
               echo "<option value = '" . $row1['name'] . "'>" . $row1['name'] . "</option>";
       } 
           
 echo "</select>";

 echo "</td>
       </tr>";
  echo     "<tr>      <th>Tuesday</th>";
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
}

$con->close();

?>