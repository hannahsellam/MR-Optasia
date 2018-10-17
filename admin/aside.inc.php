<aside>

	<h3>Catégories</h3>
<ul>
	<?php
	//Récupération des données

	try{
		//on envoie la requête
		$req = $pdo->query("SELECT *
							FROM blog_categories
							ORDER BY cat_descr ASC");

		//Nous utiliserons les résultats en tant que tableau scolaire (mode par defaut)
		//Traitement des résultats en boucle 
		$data = $req->fetchAll();  //fetch sur la variable de la req pour que le systeme nous donne la première valeur/resulats -> sert à ramener une donnée jusqu'à ce qui il y a plus rien a afficher
		//les fleches notations qui sont propre a l'objet, sert a faire le lien entre la fonction et l'objet
			?>
			

		<?php	foreach($data as $onedata) { ?>
					
					
					<li>
						<a href="index.php?cat=<?=$onedata["cat_id"] ?>"><?=$onedata["cat_descr"] ?></a>
					</li>

		<?php } ?>
					<li>
						<a href="index.php"> Toutes les catégories </a>
					</li>
</ul>

			<?php
		
		//Terminer la requête en fermant le curseur
		$req->closeCursor();//closeCursor elle fait du nettoyage, elle supprime la mémoire, supprime les informations qui ne sevent plus a rien
		}
		catch (Exception $e){
			die("Erreur MySQL : " .$e->getMessage());
		}
	?>


</aside>
