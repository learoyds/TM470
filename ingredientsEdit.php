       <?php
		include_once 'includes/HEAD_Include.php';
		?>
        <title>Today's menu</title>
        <?php
		include_once 'includes/HEAD2_Include.php';
		
		$pageName = "editIngredient";
        
		include_once 'includes/header_ingredients.php';
		?>
<div class="content">
		       <h1>Add an Ingredient</h1>
        <br>
    
  <h2>Please write the name of the recipe and click Submit to edit it.</h2>
  <br>
<div>  
 <form action='ingredients_add_DB.php' method="post" name='ingSelect'>

  <table id='daily_table' class='menu_tables' > 

       <tr> 
          <th class='table_title' colspan="2">Ingredient Selector </th>
       </tr>
  
 <tr><td>Ingredient name </td>
<?php

include_once 'includes/requestDB.php';
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
</td></tr></table><br><br>  

    <h2><button name='ingSend' type="submit" formmethod='post'>Submit</button><h2>

</form> 
</div>    
        <br> <br>                             
        <h2> <span class="red"> <a href="index.php">Back home</a> </span></h2>
 
</div>
        <?php
        include_once 'includes/footer_ingredients.php';
        ?>