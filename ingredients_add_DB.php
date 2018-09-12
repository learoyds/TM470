  <?php
		include_once 'includes/HEAD_Include.php';
		?>
        <title>Ingredients</title>
        <?php 
		include_once 'includes/HEAD2_Include.php';
		$pageName = "newIngredient";
        include_once 'includes/header_ingredients.php';
		?>
<div class="content">
		 <center><h1>Ingredients</h1></center>
 <br><br>
<?php
   include_once  'includes/requestDB.php';
   
   $returnedIng = $_POST['ingIn'];
  // echo $returnedIng;
   
$sql1 = "INSERT INTO `ingredients` (name) VALUES ('$returnedIng')";

  if($con->query($sql1) === TRUE) { 
  echo "Ingredient $returnedIng added successfully to database";}
  else {
  	echo "Connection failed";  }      
?>
  </div>
       <?php
        include_once 'includes/footer_ingredients.php';
		
        ?> 
  
  