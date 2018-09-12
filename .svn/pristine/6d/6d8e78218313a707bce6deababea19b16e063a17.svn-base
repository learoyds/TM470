<?php
		include_once 'includes/HEAD_Include.php';
		?>
        <title>Menu update</title>
        <?php
		include_once 'includes/HEAD2_Include.php';
		$pageName = "recipesEdit";
        
		include_once 'includes/header_recipes.php';
		?>
<div class="content">
            
            <h1>Recipe_editing</h1>

    <div class="transDiv">

 <?php

if(isset($_POST['recipeSelect'])) { 
 
 include_once 'includes/requestDB.php';
   $theRecipe = $_POST['recipeSelect'];
   
   echo "You have chosen to edit " . $theRecipe;
   echo "</br>";
   
   include_once 'includes/sql_recipes_edit.php';
   }
else {
	echo "No selection, please try again: ";
	} 
 
$con->close();

?>
              
  </div> <br/>
          
     <!--       <h2> <span class="red"> <a href="index.php">Back to the beginning</a> </span> </h2> -->
	 
</div>

<?php
   include_once 'includes/footer_menu.php';
?>