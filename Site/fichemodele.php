<!DOCTYPE html>

<html>
	<head>
	
		<title>Fiche du Modele</title>
		<meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1" />
		<link rel="stylesheet" media="screen" type="text/css" href="styles/main.css" />
		
	</head>
	
	<body>
	<?php include ("connexionbd.php"); ?>
	<?php
			//reception
		$id=$_GET["id"];			
	?>	
	<div id="conteneur">
		<?php include("menu.php"); ?>	
		
		<div id="corps">
			<div>
			Titre :
			</div>
			<div>
			<center>
				<?php
					$image = $bd->query("SELECT modele FROM test WHERE id=$id");
					$img = $image->fetch();
					printf($img["modele"]);
				?>
			</br>
			</center>
			</div>
			Description du fichier( auteurs ect... nbre polys...): </br>
			Jo le roi de la frite.
			</br>

		</div>
		
		
		
		<div id="footer">
		The IUT Copyright - Tous droits réservés © 2013-2014
		</div>
	</div>

	</body>
</html>
