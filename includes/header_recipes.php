
        <?php

		echo '<div class="container">';

		echo '<div id="topDiv"><center>School Dinner Management</center></div>';

		echo '<div id="mobileLogo"><center> <h1>Welcome</br></h1> </center> </div>';

		echo '<div id="linkBar">';
		

        echo '<center>';
		if($pageName == "recipes")
		{
			echo '<a href="index.php" title="Back to the main page" id="home";" >Back</a>';
		}
		else
		{
        echo '<a href="index.php" title="Back to the main page" id="home">Back</a>';
		}
        echo '  ';
      
		if($pageName == "recipesNew")
		{
			echo '<a href="recipesNew.php" title="Create a new recipe" id="recipesNew" style="background:#000;" >New</a>';
		}
		else
		{
        echo '<a href="recipesNew.php" title="Create a new recipe" id="recipesNew">New</a>';
		}
        echo '  ';
        if($pageName == "recipesEdit")
		{
			echo '<a href="recipesEdit.php" title="Change a recipe" id="recipesEdit" style="background:#000;" >Edit</a>';
		}
		else
        echo '<a href="recipesEdit.php" title="Change a recipe" id="recipesEdit">Edit</a>';
        echo '  ';

        echo '</center>';
        echo '<center><span class="motto">Hover over a link (above) for more info.</span></center>';
        echo '</div>';

?>
 