        <?php
		include_once 'includes/HEAD_Include.php';
		?>
        <title>plan a menu</title>
        <?php
		include_once 'includes/HEAD2_Include.php';
		$pageName = "Planning";
        
		include_once 'includes/header_menu.php';
		?>
<div class="content">
            
            <h1>Menu Planning</h1>

    <div class="transDiv">

 <?php  //include to create database connection

 include_once  'includes/requestDB.php'; ?>

 <?php  
 
//include to query the edit database table
 include_once 'includes/sql_menu_edit.php';
 
 ?>
  
              
 
  </div> <br/>


            
            
     <!--       <h2> <span class="red"> <a href="index.php">Back to the beginning</a> </span> </h2> -->
		
        
</div>
        <?php
        include_once 'includes/footer_menu.php';
        ?>