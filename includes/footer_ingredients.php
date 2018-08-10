 <?php
         echo '<div class="footer">';

		 echo '<div id="mobileLinkBar">';
		echo '<div id="imageDiv"><center> <img src="assets/Learoyds-Laptop.png" class="imageStyle" alt="Learoyds logo" title="Welcome to Learoyds.com; please click on the appropriate link " /></center> </div>';

        echo '<center>';
        if($pageName == "ingredients")
		{
			echo '<a href="index.php" title="Back to the main page" id="home";" >Back</a>';
		}
		else
		{
        echo '<a href="ingredients.php" title="Back" id="ingredients">Back</a>';
		}
        echo '  ';
        if($pageName == "newIngredient")
		{
			echo '<a href="ingredientsAdd.php" title="Add an ingredient" id="addNew" style="background:#000;" >New Ingredient</a>';
		}
		else
        echo '<a href="ingredientsAdd.php" title="Add an Ingredient">New Ingredient</a>';
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
        
           echo '<br />';
         echo '<img src="assets/Learoyds-Laptop.png" class="imageStyle" alt="Learoyds logo" title="Welcome to the school dinner app; please click on the appropriate link " /><p>&copy; Chris Learoyd 2018.<a href= "mailto:cjl442@my.open.ac.uk" title="Email me for more info">Email me!</a> </p>';
		 echo '<p><a href="http://validator.w3.org/check?uri=referer">';
		 echo '<img src="http://www.w3.org/Icons/valid-xhtml10" alt="Valid XHTML 1.0 Transitional" height="31" width="88" /></a> ';
		 echo '<a href="http://jigsaw.w3.org/css-validator/check/referer">';
         echo '<img style="border:0;width:88px;height:31px" src="http://jigsaw.w3.org/css-validator/images/vcss" alt="Valid CSS!" /></a></p>';
		 echo '<!-- end .footer --></div>';
         echo '<!-- end .container --></div>';
		 echo '</body>
               </html>';

?>
