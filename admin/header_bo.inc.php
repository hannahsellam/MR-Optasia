<header>
	<div id="logo">Mon header Admin</div>
	<?php
	if (isset($_SESSION["user"])) {
	?>	
	<div>
		<a href="logout.php">Logout</a>
	</div>
	<div>
		Bonjour <?= $_SESSION["user"]["display_name"]; ?>
	</div>
	<?php } ?>
</header>
<?php include("notif_bo.inc.php");