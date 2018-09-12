 <?php
		include_once 'includes/HEAD_Include.php';
		?>
        <title>Menu update</title>
        <?php
		include_once 'includes/HEAD2_Include.php';
		$pageName = "Planning";
        
		include_once 'includes/header_recipes.php';
		?>
<div class="content">
            
            <h1>Menu Planning</h1>

    <div class="transDiv">

 <?php


include_once 'includes/requestDB.php';

$isPud = 0;
if ($_POST['isPud']){
    $isPud = 1;
}
if (isset($_POST['getName'])){
    $name = ($_POST['getName']);
}
if (isset($_POST['getSname'])){
    $sName = ($_POST['getSname']);
}else{
    $sName = 'NULL';
    }
if (isset($_POST['getMethod'])){
    $method = ($_POST['getMethod']);
}else{
    $method = 'NULL';
    }
if (isset($_POST['getIng1'])){
    $getIng1 = ($_POST['getIng1']);
}else{
    $getIng1 = 'NULL';
    }
if (isset($_POST['getIng2'])){
    $getIng2 = ($_POST['getIng2']);
}else{
    $getIng2 = 'NULL';
    }
if (isset($_POST['getIng3'])){
    $getIng3 = ($_POST['getIng3']);
}else{
    $getIng3 = 'NULL';
    }
if (isset($_POST['getIng4'])){
    $getIng4 = ($_POST['getIng4']);
}else{
    $getIng4 = 'NULL';
    }
if (isset($_POST['getIng5'])){
    $getIng5 = ($_POST['getIng5']);
}else{
    $getIng5 = 'NULL';
    }
if (isset($_POST['getIng6'])){
    $getIng6 = ($_POST['getIng6']);
}else{
    $getIng6 = 'NULL';
    }
if (isset($_POST['getIng7'])){
    $seven = ($_POST['getIng7']);
}else{
    $getIng7 = 'NULL';
    }
if (isset($_POST['getIng8'])){
    $getIng8 = ($_POST['getIng8']);
}else{
    $getIng8 = 'NULL';
    }
if (isset($_POST['getIng9'])){
    $getIng9 = ($_POST['getIng9']);
}else{
    $getIng9 = 'NULL';
    }
if (isset($_POST['getIng10'])){
    $$getIng10 = ($_POST['getIng10']);
}else{
    $getIng10 = 'NULL';
    }
if (isset($_POST['getIng11'])){
    $getIng11 = ($_POST['getIng11']);
}else{
    $getIng11 = 'NULL';
    }

$sql="INSERT INTO `recipes` (`Full_name`, `name`, `is_pudding`, `method`, `ingredient_1`, `ing1_amount`, `ing1_unit`, `ingredient_2`, `ing2_amount`, `ing2_unit`, `ingredient_3`, `ing3_amount`, `ing3_unit`, `ingredient_4`, `ing4_amount`, `ing4_unit`, `ingredient_5`, `ing5_amount`, `ing5_unit`, `ingredient_6`, `ing6_amount`, `ing6_unit`, `ingredient_7`, `ing7_amount`, `ing7_unit`, `ingredient_8`, `ing8_amount`, `ing8_unit`, `ingredient_9`, `ing9_amount`, `ing9_unit`, `ingredient_10`, `ing10_amount`, `ing10_unit`, `ingredient_11`, `ing11_amount`, `ing11_unit`) 
      VALUES ('$name', '$sName', '$isPud', '$method', '$getIng1', NULL, NULL, '$getIng2', NULL, NULL, '$getIng3', NULL, NULL, '$getIng4', NULL, NULL, '$getIng5', NULL, NULL, '$getIng6', NULL, NULL, '$getIng7', NULL, NULL, '$getIng8', NULL, NULL, '$getIng9', NULL, NULL, '$getIng10', NULL, NULL, '$getIng11', NULL, NULL)";

//check the query was successful and print out the result

if ($con->query($sql) === TRUE) {
   echo " You successfully inserted new recipe data for   " . $_POST['getName'];
} else {
    echo "Error: " . $con->error;
}

$con->close();


?>
              
 
  </div> <br/>


            
            
     <!--       <h2> <span class="red"> <a href="index.php">Back to the beginning</a> </span> </h2> -->
		
        
</div>
        <?php
        include_once 'includes/footer_menu.php';
        ?>