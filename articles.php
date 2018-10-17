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
    <link rel="icon" type="image/png" href="img/favicon-32x32.png">
</head>
<body>
	<?php 

		include("admin/config.inc.php");
		include("admin/pdo.inc.php");
		
	 ?>
	<header>
		<?php include("navbar.php"); ?>
	</header>
	<main id="main-article" class="col">
		<h1 class="titre"><span>Nos articles</span></h1>
		<ul style="display: flex; flex-direction: row;">
			<li class="hvr-grow"><button style="padding: 20px;" class="formod">Derniers articles</button></li>
			<li class="hvr-grow"><button style="padding: 20px;" class="formod">Design et réalité mixte</button></li>
			<li class="hvr-grow"><button style="padding: 20px;" class="formod">Impact de la MR sur le marché</button></li>
			<li class="hvr-grow"><button style="padding: 20px;" class="formod">Réalités plurielles</button></li>
		</ul>
		<?php 
			try {
				$req = $pdo->query("
					SELECT *
					FROM projet1a_posts
					");
				$articles = $req->fetchAll();
				foreach ($articles as $key => $article) {
				?>
				<?php echo ("<section class='article row s12 m8 l8 ".$article['post_category']."cat'>") ?> 
					<div class="art s12 m8 l8">
						<h4><?= $article['post_title'] ?></h4>
						<p>
							<?= implode(' ', array_slice(explode(' ', $article['post_content']), 0, 60));  ?>
							<?php echo "<a href='article_single.php?id=".$article['post_id']."'> Lire plus...</a>"  ?>
							</strong>
						</p>
					</div>
					<!-- ?php echo "<img src='img/".$article['post_url']."'>"  ?> -->
					<?php echo "<div id='image1' class='image s4 m4 l4' style='background-size: cover!important;
    background-position: center; background: url(\"img/" . $article['post_url'] . "\")'>"; ?></div>
				</section>
				<?php
				}
			} catch(Exeption $e){

			}
		 ?>
        <section>
            <button id="dossier"><a href="Dossier de Presse.pdf">Télécharger le dossier de presse</a></button>
        </section>

	</main>
	<?php include("footer.php"); ?>
    <script type="text/javascript" src="js/mroptasia.js"></script>
    <script type="text/javascript">
document.getElementsByClassName('formod')[0].onclick=function(){
      			var cat1 = document.getElementsByClassName("1cat");
                for(var i=0; i<cat1.length; i++)
                {
                    cat1[i].style.display = 'flex';
                }
                var cat2 = document.getElementsByClassName("2cat");
                for(var i=0; i<cat2.length; i++)
                {
                    cat2[i].style.display = 'none';
                }
                var cat3 = document.getElementsByClassName("3cat");
                for(var i=0; i<cat3.length; i++)
                {
                    cat3[i].style.display = 'none';
                }
                var cat4 = document.getElementsByClassName("4cat");
                for(var i=0; i<cat4.length; i++)
                {
                    cat4[i].style.display = 'none';
                }
  }

document.getElementsByClassName('formod')[1].onclick=function(){
      			var cat1 = document.getElementsByClassName("1cat");
                for(var i=0; i<cat1.length; i++)
                {
                    cat1[i].style.display = 'none';
                }
                var cat2 = document.getElementsByClassName("2cat");
                for(var i=0; i<cat2.length; i++)
                {
                    cat2[i].style.display = 'flex';
                }
                var cat3 = document.getElementsByClassName("3cat");
                for(var i=0; i<cat3.length; i++)
                {
                    cat3[i].style.display = 'none';
                }
                var cat4 = document.getElementsByClassName("4cat");
                for(var i=0; i<cat4.length; i++)
                {
                    cat4[i].style.display = 'none';
                }
  }

document.getElementsByClassName('formod')[2].onclick=function(){
      			var cat1 = document.getElementsByClassName("1cat");
                for(var i=0; i<cat1.length; i++)
                {
                    cat1[i].style.display = 'none';
                }
                var cat2 = document.getElementsByClassName("2cat");
                for(var i=0; i<cat2.length; i++)
                {
                    cat2[i].style.display = 'none';
                }
                var cat3 = document.getElementsByClassName("3cat");
                for(var i=0; i<cat3.length; i++)
                {
                    cat3[i].style.display = 'flex';
                }
                var cat4 = document.getElementsByClassName("4cat");
                for(var i=0; i<cat4.length; i++)
                {
                    cat4[i].style.display = 'none';
                }
  }
document.getElementsByClassName('formod')[3].onclick=function(){
                var cat1 = document.getElementsByClassName("1cat");
                for(var i=0; i<cat1.length; i++)
                {
                    cat1[i].style.display = 'none';
                }
                var cat2 = document.getElementsByClassName("2cat");
                for(var i=0; i<cat2.length; i++)
                {
                    cat2[i].style.display = 'none';
                }
                var cat3 = document.getElementsByClassName("3cat");
                for(var i=0; i<cat3.length; i++)
                {
                    cat3[i].style.display = 'none';
                }
                var cat4 = document.getElementsByClassName("4cat");
                for(var i=0; i<cat4.length; i++)
                {
                    cat4[i].style.display = 'flex';
                }
 }
</script>
</body>
</html>