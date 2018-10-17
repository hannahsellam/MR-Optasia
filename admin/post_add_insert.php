<?php session_start(); ?>
<?php include("config.inc.php"); ?>
<?php include("pdo.inc.php"); ?>
	<?php
	if (isset($_POST["categorie"])) // pour savoir si dans le tableau post il y a une case auteur
		{
			try {
				$auteur = $_SESSION["user"]["user_id"]; 
				$query = "INSERT INTO projet1a_posts
							(post_author, post_category, post_content, post_title)
						VALUES
							(".$auteur.", ".$_POST["categorie"]." ,'".addslashes($_POST["contenu"]). "','".addslashes($_POST["titre"])."')";
				
				$req = $pdo->exec($query);
				header("Location:post_add.php?notif=ok");
			}
			catch (Exception $e) {
			header("Location:post_add.php?notif=nok");
		}
	}
?>