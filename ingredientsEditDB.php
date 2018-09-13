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
 
 
</div>    
        <br> <br>                             
        <h2> <span class="red"> <a href="index.php">Back home</a> </span></h2>
 
</div>
        <?php
        include_once 'includes/footer_ingredients.php';
        ?>