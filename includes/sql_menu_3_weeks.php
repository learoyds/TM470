<?php

$sql = 'SELECT * FROM weekly';
$result = $con->query($sql);
$row_number = 0;

   if ($result != false){
 for($i = 0; $i< 3; $i++){

  $row_number++;
  $row = $result->fetch_assoc();

  echo "<table id='daily_table' class='menu_tables' >
      <tr>
           <th class='table_title'>Week" . $row_number . "</th>
           <th>Main</th>
           <th>Pudding</th>
      </tr> 
      <tr>
           <th>Monday</th>";
  echo         "<td>" . $row['monday_main'] . "</td>";      
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
 </table> </br>";   
}
}

$con->close();










?>