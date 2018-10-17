<!DOCTYPE html>
<html>
<head>
    <meta charset="UTF-8">
    <title>MrOptasia</title>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.0.10/css/all.css" integrity="sha384-+d0P83n9kaQMCwj8F4RJB66tzIwOKmrdb46+porD/OvrJ+37WqIM7UoBtwHO6Nlg" crossorigin="anonymous">
    <link rel="stylesheet" type="text/css" href="css/mroptasia.css" />
    <link rel="stylesheet" type="text/css" href="css/hover-min.css">
    <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
    <script src="https://code.jquery.com/jquery-3.3.1.min.js" integrity="sha256-FgpCb/KJQlLNfOu91ta32o/NMZxltwRo8QtmkMRdAu8=" crossorigin="anonymous"></script>
</head>
<body>
    
    	<?php 

    		include("admin/config.inc.php");
    		include("admin/pdo.inc.php");
    		
            if ((isset($_GET['id'])) && ($_GET['id'] != '')) {
    	 ?>
    	<header>
    		<?php include("navbar.php"); ?>
    	</header>
    <main id="article-single">
        <?php 
            try {
                $req = $pdo->query("
                    SELECT *
                    FROM projet1a_posts
                    WHERE post_id = ".$_GET['id']
                );
                $article = $req->fetch();

                if ($article['post_title'] == null) {
                    echo "Article inexistant";
                } else {
                ?>
                    <h1 class="titre"><span><?= $article['post_title'] ?></span></h1>
                    <div class="art s12 m8 l8">
                        
                        <p>
                            <?= $article['post_content'] ?>
                        </p>
                        <img class="img-art" alt="image article" src="img/<?= $article['post_url'] ?>">
                    </div>
                    <br>
                    <br>
                         <form method="post" action="add_comment.php">
            <textarea name="content"></textarea>
            <?php echo "<input type='hidden' name='id' value='".$_GET['id']."'>"  ?>
            <input type="submit" name="">
         </form>
                <?php
                $req = $pdo->query("
                    SELECT *
                    FROM projet1a_comments
                    WHERE comment_post_ID = '".$_GET['id']."'
                    ORDER BY comment_id desc" 
                );
                $comments = $req->fetchAll();
                foreach ($comments as $key => $comment) {
                    echo ("<p class='comment'>- ".$comment['comment_content']." le <i>".$comment['comment_date']."</i></p>"); 
                    echo "<br>";
                }
            }
            } catch(Exeption $e){

            }
         ?>

         <br><br>
         <a href="articles.php">Retour</a>
        <?php 
            } else {
                header("Location:articles.php?notif=nok");
            }
         ?>
    </main>
    <?php include("footer.php"); ?>
</body>
</html>