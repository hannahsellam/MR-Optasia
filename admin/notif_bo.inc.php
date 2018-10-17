<?php 
	if (isset($_GET["notif"])) {
			if ($_GET["notif"] == "ok") 
				echo "<h2>Bravo,votre demande est prise en compte!</h2>";
			else
				echo "<h2>Désolé, l'action demandée n'a pu être effectuée !</h2>";
	}
?>