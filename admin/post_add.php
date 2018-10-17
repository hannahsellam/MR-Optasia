<?php
	include("protection.inc.php");
?>
<!DOCTYPE html>
<html lang="fr">
<head>
	<title>Création d'un article</title>
	<meta charset="utf-8"/>
</head>
<body>
	<?php include("config.inc.php"); ?>
	<h2>Connexion à la BD</h2>
	<?php include("pdo.inc.php"); ?>

	<?php include("header_bo.inc.php"); ?>

<main>
	<h1>Création d'un article</h1>
	<form id="form_post" method="post" action="post_add_insert.php">
		<table>
			

			<tr>
				<th>
					<label for="titre">Titre</label>
				</th>
				<td>
					<input type="text" name="titre" />
				</td>
			</tr>

			<tr>
				<th>
					<label for="categorie">Catégorie</label>
				</th>
				<td>
					<select name="categorie">
							<?php
								//Récupération des données

								try{
									//on envoie la requête
									$req = $pdo->query("SELECT *
														FROM projet1a_categories
														ORDER BY cat_descr ASC");

									//Nous utiliserons les résultats en tant que tableau scolaire (mode par defaut)
									//Traitement des résultats en boucle 
									$data = $req->fetchAll();  //fetch sur la variable de la req pour que le systeme nous donne la première valeur/resulats -> sert à ramener une donnée jusqu'à ce qui il y a plus rien a afficher
									//les fleches notations qui sont propre a l'objet, sert a faire le lien entre la fonction et l'objet
										?>
										

									<?php	foreach($data as $onedata) { ?>
										
												<option value="<?= $onedata["cat_id"] ?>">
													<?=$onedata["cat_descr"] ?>
												</option>

									<?php } ?>
									<?php
		
										//Terminer la requête en fermant le curseur
										$req->closeCursor();//closeCursor elle fait du nettoyage, elle supprime la mémoire, supprime les informations qui ne sevent plus a rien
										}
										catch (Exception $e){
											die("Erreur MySQL : " .$e->getMessage());
										}
									?>

											
					</select>
				</td>
			</tr>

			<tr>
				<th>
					<label for="contenu">Contenu</label>
				</th>
				<td>
					<textarea name="contenu" rows="10" cols="100"></textarea>
				</td>
			</tr>

			<tr>
				<th></th>
				<td>
					<input type="submit" name="Enregistrer">
					<input type="reset" name="Effacer">
				</td>
			</tr>
		</table>
	</form>

</main>

	<?php include("aside_bo.inc.php"); ?>

</body>
</html>