        <?php

		// php to bring in a php page containing the links to css external files and the meta data
		include_once 'includes/HEAD_Include.php';
		?>

		<!--title appears on the browser tab-->

        <title>School Dinner App</title>
        <?php

		//php page is imported and run hereto supply the script tags for JS

		/*include_once 'includes/HEAD2_Include.php';*/

		//page name is a php variable for formatting the links

		$pageName = "home";

		// php to bring in the links also called the navigation or buttons

        include_once 'includes/headerInclude.php';
		?>

<!--main content container declared as class for css purposes ie formatting-->
<div class="content">
  
   <h1>Home</h1>
   
   <h2>Welcome to the School App</h2></br>
   <p>Please use the the buttons to navigate to the section you require</p>
   
 </div>
        <?php

		// php imported for the footer containing the mobile links these keep 
		// the pages consistent removing the need for rewriting 
        include_once 'includes/footerInclude.php';
        ?>
