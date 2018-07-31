
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
        echo '<a href="menus.php" title="Back" id="menus">Back</a>';
		}
        echo '  ';
        if($pageName == "thisWeek")
		{
			echo '<a href="menuThisWeek.php" title="This weeks menu" id="thisWeek" style="background:#000;" >This week</a>';
		}
		else
        echo '<a href="menuThisWeek.php" title="This weeks menu">This week</a>';
        echo '  ';
		if($pageName == "Planning")
		{
			echo '<a href="menuPlan.php" title="Plan a menu" id="planning" style="background:#000;" >Plan</a>';
		}
		else
		{
        echo '<a href="menuPlan.php" title="Plan a menu" id="websites">Plan</a>';
		}
        echo '  ';
        if($pageName == "3weeks")
		{
			echo '<a href="menu3weeks.php" title="View 3 weekly menu" id="3weeks" style="background:#000;" >Plan</a>';
		}
		else
        echo '<a href="menu3weeks.php" title="View 3 weekly menu" id="websites">3 Weeks</a>';
        echo '  ';

        echo '</center>';
        echo '<center><span class="motto">Hover over a link (above) for more info.</span></center>';
        echo '</div>';

?>
 