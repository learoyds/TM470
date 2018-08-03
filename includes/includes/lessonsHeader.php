 <?php
     echo '<div class="container">';
	 
	 echo '<div id="mobileLogo"><center> <img src="assets/Learoyds-Laptop.png" class="imageStyle" alt="Learoyds logo" title="Welcome to Learoyds.com; please click on the appropriate link " /></center> </div>';
	 
	 echo '<div id="lessonsLinkBar">';
	 
	echo '<center>';
	
	echo '<div id="imageDiv"><center> <img src="assets/Learoyds-Laptop.png" class="imageStyle" alt="Learoyds logo" title="Welcome to Learoyds.com; please click on the appropriate link " /></center> </div>';
	
	    echo '<a href="index.php" title="Back to the main page" id="lessonsBackHome">Home</a>';
		echo ' ';
		
		if($pageName == "monthly")
		{
			echo '<a href="monthly.php" title="For monthly rental computer lessons" id="monthly" style="background:#36F;" >Monthly Lessons</a>';
		}
		else
		{
        echo '<a href="monthly.php" title="For monthly rental computer lessons" id="monthly">Monthly Lessons</a>';
		}
        echo '  ';
		
		if($pageName == "hourly")
		{
			echo '<a href="hourly.php" title="For hourly computer lessons" id="hourly" style="background:#36F;" >Hourly Lessons</a>';
		}
		else
		{
        echo '<a href="hourly.php" title="For hourly rental computer lessons" id="hourly">Hourly Lessons</a>';
		}
        echo '  '; 
		
		if($pageName == "tabletOrLaptop")
		{
			echo '<a href="tabletOrLaptop.php" title="For help choosing what to buy" id="tabletOrLaptop" style="background:#36F;" >Tablet or Laptop?</a>';
		}
		else
		{
        echo '<a href="tabletOrLaptop.php" title="For help choosing what to buy" id="tabletOrLaptop">Tablet or Laptop?</a>';
		}
        echo '  '; 
		
		echo '</center>';
	 
	 echo '</div>';
	 	
 ?>