
        <?php

		echo '<div class="container">';

		echo '<div id="topDiv"><center>School Dinner Management</center></div>';

		echo '<div id="mobileLogo"><center> <h1>Welcome</br></h1> </center> </div>';

		echo '<div id="linkBar">';
		

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
        echo '<a href="menuPlan.php" title="Plan a menu" id="planning">New menu</a>';
		}
        echo '  ';

        echo '</center>';
        echo '<center><span class="motto">Hover over a link (above) for more info.</span></center>';
        echo '</div>';

?>
 