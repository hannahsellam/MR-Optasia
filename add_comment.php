<?php include("admin/config.inc.php"); ?>
<?php include("admin/pdo.inc.php"); ?>
	<?php
		try {
			$query = ("
				INSERT INTO projet1a_comments
					(comment_date, comment_content, comment_post_ID, comment_author)
				VALUES 
					(NOW(), '".addslashes($_POST['content'])."', '".addslashes($_POST['id'])."', 1)
				");

			$pdo->exec($query);

			header("Location:article_single.php?id=".$_POST['id']."&notif=ok");
		} catch (Exception $e) {
			header("Location:article_single.php?id=".$_POST['id']."&notif=nok");
		}
?>