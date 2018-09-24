        <?php
		include_once 'includes/HEAD_Include.php';
		?>
        <title>Today's menu</title>
        <?php
		include_once 'includes/HEAD2_Include.php';
		
		$pageName = "newIngredient";
        
		include_once 'includes/header_ingredients.php';
		?>
<div class="content">
		       <h1>Add an Ingredient</h1>
        <br>
    
  <h2>Please write the name of the recipe and click or tap Save</h2>
  <br><br>
<div>  
  <form action = 'ingredients_add_DB.php' method = 'POST' name='menuPlan'>
  
        <input type='text' name='ingIn' placeholder='Name here' ><br>           
          
        <br> <h2> <span class='red'> <button type="submit" name="ingSubmit" value="Submit" formmethod="post">Save</button></span></h2>
 </form>  
</div>    
        <br> <br>                             
        <h2> <span class="red"> <a href="index.php">Back home</a> </span></h2>
 
</div>
        <?php
        include_once 'includes/footer_ingredients.php';
        ?>