    <?php
         echo '<div class="footer">';

		 echo '<div id="mobileLinkBar">';
		//echo '<div id="imageDiv"><center> <img src="assets/Learoyds-Laptop.png" class="imageStyle" alt="Learoyds logo" title="Welcome to Learoyds.com; please click on the appropriate link " /></center> </div>';

        echo '<center>';
        if($pageName == "menus")
		{
			echo '<a href="index.php" title="Back to the main page" id="home";" >Back</a>';
		}
		else
		{
        echo '<a href="index.php" title="Back" id="menus">Back</a>';
		}
        echo '  ';
        if($pageName == "thisWeek")
		{
			echo '<a href="menuThisWeek.php" title="This weeks menu" id="thisWeek" style="background:#000;" >This week</a>';
		}
		else
        echo '<a href="menuThisWeek.php" title="This weeks menu">This week</a>';
        echo '  ';
		if($pageName == "3weeks")
		{
			echo '<a href="menu3weeks.php" title="This term\'s menu" id="3weeks" style="background:#000;" >This term</a>';
		}
		else
        {
        echo '<a href="menu3weeks.php" title="This term\'s menu" id="websites">This term</a>';
        }
        echo '  ';

		if($pageName == "Planning")
		{
			echo '<a href="menuPlan.php" title="Plan a menu" id="planning" style="background:#000;" >New menu</a>';
		}
		else
		{
        echo '<a href="menuPlan.php" title="Plan a menu" id="websites">New menu</a>';
		}
        echo '  ';

        echo '</center>';
        echo '<center><span class="motto">Hover over a link (above) for more info.</span></center>';
        echo '</div>';
        
           echo '<br />';
         echo '<img src="assets/Learoyds-Laptop.png" class="imageStyle" alt="Learoyds logo" title="Welcome to the school dinner app; please click on the appropriate link " /><p>&copy; Chris Learoyd 2018.<a href= "mailto:cjl442@my.open.ac.uk" title="Email me for more info">Email me!</a> </p>';
		 echo '<p><a href="https://validator.w3.org/check?uri=referer">';
		 echo '<img src="https://www.w3.org/Icons/valid-xhtml10" alt="Valid XHTML 1.0 Transitional" height="31" width="88" /></a> ';
		 echo '<a href="https://jigsaw.w3.org/css-validator/check/referer">';
         echo '<img style="border:0;width:88px;height:31px" src="https://jigsaw.w3.org/css-validator/images/vcss" alt="Valid CSS!" /></a></p>';
		 echo '<!-- end .footer --></div>';
         echo '<!-- end .container --></div>';
		 echo '</body>
               </html>';

?>