<!--
Footer
-->

        <?php
         echo '<div class="footer">';

		 echo '<div id="mobileLinkBar">';
		//echo '<div id="imageDiv"><center> <img src="assets/Learoyds-Laptop.png" class="imageStyle" alt="Learoyds logo" title="Welcome to Learoyds.com; please click on the appropriate link " /></center> </div>';

        echo '<center>';
	
		if($pageName == "home")
		{
			echo '<a href="index.php" title="Back to the main page" id="home" style="background:#36f;" >Back</a>';
		}
		else
		{
        echo '<a href="index.php" title="Back to the main page" id="home">Back</a>';
		}
        echo '  ';
        
         if($pageName == "events")
      {
        echo '<a href="events.php" title="events" id="events" style = "background:##36f;">Events</a> ';
      } 
       else 
      {
        echo '<a href="events.php" title="events" id="events">Events</a> ';
      }
        echo '  ';

		if($pageName == "Menus and Planning")
		{
			echo '<a href="menus.php" title="Menus and meal planning" id="menus" style="background:#36f;" >Menus</a>';
		}
		else
		{
        echo '<a href="menus.php" title="Menus and meal planning" id="menus">Menus</a>';
		}
        echo '  ';
         if($pageName == "nutrition")
      {
        echo '<a href="nutrition.php" title="nutrition" id="nutrition" style = "background:#36f;">Nutrition</a> ';
      } 
       else 
      {
        echo '<a href="nutrition.php" title="nutrition" id="nutrition">Nutrition</a> ';
      }
        echo '  ';

		if($pageName == "ingredients")
		{
			echo '<a href="ingredients.php" title="Add or edit an ingredient and its nutrients" id="business" style="background:#36f;" >Ingredients</a>';
		}
		else
		{
			echo '<a href="ingredients.php" title="Add or Edit an Ingredient and its Nutrients" id="business" >Ingredients</a>';
		}
        echo '  ';
		if($pageName == "overtime")
		{
			echo '<a href="overtime.php" title="Overtime" id="overtime" style="background:#36f;" >Overtime</a>';
		}
		else
		{
			echo '<a href="overtime.php" title="Overtime" id="today">Overtime</a>';
		}
		echo '  ';
		if($pageName == "allergies")
		{
			echo '<a href="allergies.php" title="allergies" id="allergies" style="background:#36f;" >Allergies</a>';
		}
		else
		{
        echo '<a href="allergies.php" title="allergies" id="websites">Allergies</a>';
		}
        echo '  ';
		if($pageName == "suppliers")
		{
			echo '<a href="suppliers.php" title="suppliers" id="suppliers" style="background:#36f;" >Suppliers</a>';
		}
		else
		{
            echo '<a href="suppliers.php" title="Suppliers" id="suppliers">Suppliers</a>';
		}
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
    
