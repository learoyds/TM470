     <?php
		include_once 'HEAD_Include.php';
		?>
        <title>Ingredients</title>
        <?php 
		include_once 'HEAD2_Include.php';
		$pageName = "ingredients";
        include_once 'header_ingredients.php';
		
		?>
<div class="content">
		 <center><h1>Ingredients</h1></center>
 <br><br>

           
<form action='ingredients_add_DB.php' method="post" name='ingSelect'>

  <table id='daily_table' class='menu_tables' > 

       <tr> 
          <th class='table_title' colspan="2">Ingredient Selector </th>
       </tr>
  
 <tr><td>Ingredient name </td>
<?php

include_once 'requestDB.php';
echo "<td>";
  echo "<select name='getIng' style='word-break:break-word; color:white; width:100%; max-width:90% ;background-color:black; font-size: 1em; border-color:black;'>
           <option selected disabled value='Choose'>Choose</option> ";
$sql='SELECT * FROM ingredients';
$result = $con -> query ($sql);
  while ($row = $result->fetch_assoc()){          
  $ingName = $row['name'];
echo "<option value = ' $ingName '> $ingName </option>";
 } 
$result->free();     
echo "</select>";
?>
</td></tr></table>  

    <h2><button name='ingSend' type="submit" formmethod='post'>Submit</button><h2>

</form>
  </div>
       <?php
        include_once 'includes/footer_ingredients.php';
		
        ?> 
  
  