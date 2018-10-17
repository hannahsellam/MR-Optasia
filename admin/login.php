<!DOCTYPE html>
<html lang="fr">
	<head>
		<meta charset="utf-8">
		<title>Identification</title>
		</head>
<body>
	<?php include("config.inc.php");?>
	<?php include("pdo.inc.php");?>
	<?php include ("header_bo.inc.php");?>
<main>
	<h1>Identification</h1>
	<form id="form_login" method="post" action="verif.php">
		<table border="1">
			<caption>Se connecter</caption>
			<tr>
				<th><label for="login">Login</label></th>
				<td><input type="text" name="login" /></td>
			</tr>
			<tr>
				<th><label for="password">Password</label></th>
				<td><input name="password" type="password"/></td>
			</tr>
			<tr>
				<th></th>
				<td>
					<input type="submit" value="Se connecter" />
				</td>
			</tr>
		</table>
		</form>
	</main>
</body>
</html>