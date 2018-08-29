
        <?php

        if(isset($con)){
          $con->close();
        }

		echo '<div class="container">';

		echo '<div id="topDiv"><center>School Dinner Management</center></div>';

		echo '<div id="mobileLogo"><center> <h1>Welcome</br></h1> </center> </div>';

		echo '<div id="linkBar">';
		

        echo '<center>';
		if($pageName == "home")
		{
			echo '<a href="index.php" title="Back to the main page" alt = "links back to the main page" id="home" style="background:#000;" >Back</a>';
		}
		else
		{
        echo '<a href="index.php" title="Back to the main page" alt = "links back to the main page" id="home">Back</a>';
		}
        echo '  ';

        if($pageName == "Menus and Planning")
		{
			echo '<a href="menus.php" title="Menus and meal planning"  id="menus" style="background:#000;" >Menus</a>';
		}
		else
		{
        echo '<a href="menus.php" title="Menus and meal planning" id="menus">Menus</a>';
		}
        echo '  ';

      if($pageName == "recipes") 
      {
        echo '<a href="recipes.php" title="Add or edit a recipe" id = "recipes" style="background:#000;" >Recipes</a>';
      }
      else 
      {
        echo '<a href="recipes.php" title="Add or edit a recipe" id = "recipes">Recipes</a>';
      }
        echo '  ';
        
		if($pageName == "ingredients")
		{
			echo '<a href="ingredients.php" title="Add or edit an ingredient and its nutrients" id="business" style="background:#000;" >Ingredients</a>';
		}
		else
		{
			echo '<a href="ingredients.php" title="Add or Edit an Ingredient and its Nutrients" id="business" >Ingredients</a>';
		}
        echo '  ';

   /*     if($pageName == "allergies")
		{
			echo '<a href="allergies.php" title="allergies" id="allergies" style="background:#000;" >Allergies</a>';
		}
		else
		{
        echo '<a href="allergies.php" title="allergies" id="websites">Allergies</a>';
		}
        echo '  ';
      if($pageName == "nutrition")
      {
        echo '<a href="nutrition.php" title="manage nutrition" id="nutrition" style = "background:#000;">Nutrition</a> ';
      } 
       else 
      {
        echo '<a href="nutrition.php" title="manage nutrition" id="nutrition">Nutrition</a> ';
      }
        echo '  ';

		if($pageName == "suppliers")
		{
			echo '<a href="suppliers.php" title="suppliers" id="suppliers" style="background:#000;" >Suppliers</a>';
		}
		else
		{
            echo '<a href="suppliers.php" title="Suppliers" id="suppliers">Suppliers</a>';
		}
        echo '  ';

		if($pageName == "overtime")
		{
			echo '<a href="overtime.php" title="Overtime" id="overtime" style="background:#000;" >Overtime</a>';
		}
		else
		{
			echo '<a href="overtime.php" title="Overtime" id="today">Overtime</a>';
		} */
		echo '</center>';
        echo '<center><span class="motto">Hover over a link (above) for more info.</span></center>';
        echo '</div>';

?>
 