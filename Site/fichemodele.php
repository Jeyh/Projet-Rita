<!DOCTYPE html>

<html>
	<head>
	
		<title>Fiche du Modèle</title>
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
		<div id="header"><a href='index.php'></a></div>
		
		<div id="menu">
		<a id ="accueil" href='index.php'>Accueil</a>
			<div id="recherche">
				<div id="text">
					<form action="recherche.php" method="Post">
						<input type="text" name="requete">
						<input type="submit" id="bouton_recherche" value="Recherche">						
					</form>
				</div>
			</div>
		<a id= "liste" href='index.html'>Liste</a> 
		</div>
		
		<div id="corps">
			<center>
				<?php
					$image = $bd->query("SELECT modele FROM test WHERE id=$id");
					$img = $image->fetch();
					printf($img["modele"]);
				?>
			</center>
		</div>
		
		<div id="footer">
		The IUT Copyright - Tous droits réservés © 2013-2014
		</div>
	</div>

	</body>
</html>
