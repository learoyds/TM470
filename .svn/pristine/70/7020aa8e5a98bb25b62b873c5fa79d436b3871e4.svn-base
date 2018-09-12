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
            
            <h1>Results</h1>

    <div class="transDiv">

 <?php

// initiate connection with the database

include_once 'includes/requestDB.php';

//Create a variables for the recipe choices.


$fullName = ($_POST['theRecipe']);

//if (isset($_POST['method'])){
    $method = ($_POST['method']);
//}
//if (isset($_POST['getIng1'])){
    $ing1 = ($_POST['getIng1']);
//}
//if (isset($_POST['getIng2'])){
    $ing2 = ($_POST['getIng2']);
//}
//if (isset($_POST['getIng3'])){
    $ing3 = ($_POST['getIng3']);
//}
//if (isset($_POST['getIng4'])){
    $ing4 = ($_POST['getIng4']);
//}
//if (isset($_POST['getIng5'])){
    $ing5 = ($_POST['getIng5']);
//}
//if (isset($_POST['getIng6'])){
    $ing6 = ($_POST['getIng6']);
//}
//if (isset($_POST['getIng7'])){
    $ing7 = ($_POST['getIng7']);
//}
//if (isset($_POST['getIng8'])){
    $ing8 = ($_POST['getIng8']);
//}
//if (isset($_POST['getIng9'])){
    $ing9 = ($_POST['getIng9']);
//}
//if (isset($_POST['getIng10'])){
    $Ing10 = ($_POST['getIng10']);
//}
//if (isset($_POST['getIng11'])){
    $Ing11 = ($_POST['getIng11']);
///}

//send the form result to the database

$sql="UPDATE `recipes` 
     SET `Full_name` = '$fullName', `method` = '$method', `ingredient_1` = '$ing1', `ingredient_2` = '$ing2', `ingredient_3` = '$ing3', `ingredient_4` = '$ing4', `ingredient_5` = '$ing5', `ingredient_6` = '$ing6', `ingredient_7` = '$ing7', `ingredient_8` = '$ing8', `ingredient_9` = '$ing9', `ingredient_10` = '$ing10', `ingredient_11` = '$ing11'
     WHERE `recipes`.`Full_name` = '$fullName'";

//check the query was successful and print out the result

if ($con->query($sql) === TRUE) {
   echo "<h1> You successfully inserted recipe data data for $fullName </h1>";
} else {
    echo "Error: " . $sql . "<br>" . $con->error;
}

$con->close();

?>         
 
  </div> <br/></br>

 <!-- allow the user to escape the page but stay on the editing pages  -->
              
      <h2> <span class="red"> <a href="recipesEdit.php">Back</a> </span> </h2> 	
        
</div>
<?php
   include_once 'includes/footer_menu.php';
?>