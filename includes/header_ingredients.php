
        <?php

		echo '<div class="container">';

		echo '<div id="topDiv"><center>School Dinner Management</center></div>';

		echo '<div id="mobileLogo"><center> <h1>Welcome</br></h1> </center> </div>';

		echo '<div id="linkBar">';
		

        echo '<center>';
		if($pageName == "ingredients")
		{
			echo '<a href="index.php" title="Back to the main page" id="home";" >Back</a>';
		}
		else
		{
        echo '<a href="index.php" title="Back" id="ingredients">Back</a>';
		}
        echo '  ';
        if($pageName == "newIngredient")
		{
			echo '<a href="ingredientsAdd.php" title="Add an ingredient" id="addNew" style="background:#000;" >New Ingredient</a>';
		}
		else
        {
        echo '<a href="ingredientsAdd.php" title="Add an Ingredient">New Ingredient</a>';
        }
        echo '  ';
		if($pageName == "editIngredient")
		{
			echo '<a href="ingredientsEdit.php" title="Edit an ingredient" id="editIngredient" style="background:#000;" >Edit Ingredient</a>';
		}
		else
		{
        echo '<a href="ingredientsEdit.php" title="Edit an ingredient" id="editIngredient">Edit Ingredient</a>';
		}
        echo '  ';
        
        echo '<a href="#" title="" id="websites"></a>';
        echo '  ';

        echo '</center>';
        echo '<center><span class="motto">Hover over a link (above) for more info.</span></center>';
        echo '</div>';

?>
 