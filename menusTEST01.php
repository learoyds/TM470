             <?php
	include_once 'includes/HEAD_Include.php';
		?>
        <title>Create new menu week 2</title>
        <?php
			include_once 'includes/HEAD2_Include.php';
		$pageName = "Planning";
                
		include_once 'includes/header_menu.php';
        ?>
		
<div class="content">
		       <h1>You are Planning Week 2</h1>

<div class="transDiv">

<h2> <span class="red"> <a href="menusTEST.php">Press to plan week 1</a> </span></h2>

<h2> <span class="red"> <a href="menusTEST02.php">Press to plan week 3</a> </span></h2>


<?php
include_once 'includes/requestDB.php';
?>
<?php
include_once 'includes/sql_menu_TEST01.php';
?>

  </div> <br/> 


                                     
     <h2> <span class="red"> <a href="index.php">Back to the beginning</a> </span></h2>
        
  </div> 
 <?php
    include_once 'includes/footer_menu.php';
 ?>