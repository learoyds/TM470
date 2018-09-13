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
    
  <h2>Make any changes required and submit it to the database.</h2>
  <br>
  <?php
      $name = $_POST['getIng'];
      //echo $name;
  ?>
<div>  
 <form action='ingredients_edit_DB.php' method="post" name='ingSelect'>

  <table id='daily_table' class='menu_tables' > 

       <tr> 
          <th class='table_title' colspan="2">Ingredient Editor </th>
       </tr>
  
 <tr><td>Ingredient name </td>
<?php

//include_once 'includes/requestDB.php';
echo "<td>  ";
  echo "<input name='getIng' value='$name' type = 'text'/> ";
          
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