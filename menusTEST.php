             <?php
	include_once 'includes/HEAD_Include.php';
		?>
        <title>Create new menu</title>
        <?php
			include_once 'includes/HEAD2_Include.php';
		$pageName = "Planning";
        
		include_once 'includes/header_menu.php';

        //$answer = 1;
        if(isset($con)){
           $con->close();}
		?>
<div class="content">
		       <h1>You are Planning Week 1</h1>

<div class="transDiv">

<h2> <span class="red"> <a href="menusTEST01.php">Press to plan week 2</a> </span></h2>

<h2> <span class="red"> <a href="menusTEST02.php">Press to plan week 3</a> </span></h2>

<?php

   include_once  'includes/requestDB.php';

?>
<?php

   include_once 'includes/sql_menu_TEST.php';

?>
                
 
  </div> <br/> 


                                     
     
        
  </div> 
 <?php
    include_once 'includes/footer_menu.php';
 ?>