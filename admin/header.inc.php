<header>
	<div id="logo" style="text-align: center;"><img src="https://static1.squarespace.com/static/538161bfe4b0b3690d3da6d9/55c8f15be4b094e2e5245edb/55c8f62ee4b02a4dcbdc74a3/1439236979822/skate+warehouse+logo.jpg?format=300w"><h2>LA SKATEBOARDERIE</h2></div>
	<?php
	if (isset($_SESSION["user_fo"])) {
	?>	
	<div>
		<a href="logout.php">Logout</a>
	</div>
	<div>
		Bonjour <?= $_SESSION["user_fo"]["display_name"]; ?>
	</div>
	<?php } else { ?>
	<form id="form_login" method="post" action="verif.php">
		<label for="login">Login</label>
			<input type="text" name="login" />
			<label for="password">Password</label>
			<input name="password" type="password"/>	
			<input type="submit" value="Se connecter" />
	</form>
	<?php } ?>
</header>
<?php include("notif_front.php"); ?>