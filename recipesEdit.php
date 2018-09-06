       <?php
		include_once 'includes/HEAD_Include.php';
		?>
        <title>Today's menu</title>
        <?php
		include_once 'includes/HEAD2_Include.php';
		$pageName = "recipesEdit";
        
		include_once 'includes/header_recipes.php';
		?>
<div class="content">
		       <h1>Edit a recipe</h1>

    <div>
               
			   Please choose a recipe to edit </br></br>
			   
<form  action="recipes_edit_DB.php" method="post" name = "recipesForm">
	
	<select id='week' name='recipeSelect' onchange=' ' style='word-break:break-word; height:45px; float:centre; color:#6F0; font-weight:bold; width:100%; max-width:50% ; background-color:black; font-size:1em;border-color:black;'>


<?php 
include_once 'includes/requestDB.php';

                 $sql="SELECT * FROM recipes";
                 
$result = $con -> query ($sql);
  while ($row = $result->fetch_assoc()){          
  
    echo "<option value = '" . $row['Full_name'] . "'>" . $row['Full_name'] . "</option>";
 } 
$result->free(); 
$con->close();
?> 
   </select>
             
<h2> <span class='red'> <button type = 'submit' formmethod= 'post' name='submit'>Choose</button></span> </h2> 

			   </form>

   </div>          
             <br/> 
                                     

</div>
        <?php
        include_once 'includes/footer_recipes.php';
        ?>