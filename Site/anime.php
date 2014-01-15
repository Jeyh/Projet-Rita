<!DOCTYPE html>

<html>
	<head>
		<title>Nom du site - Anime</title>
		<link rel="stylesheet" href="cssaccueil.css">
	</head>

	<body>		
		
		<?php include("entete.php"); ?>
		
		<?php
				//reception
			$id=$_GET["id"];
			
		?>
		
		<div id ="articles">
			<div id ="article">
				<div id ="titre">
					<h1>
					<?php
						$titre=$bd->query("SELECT titre FROM anime WHERE id=$id");
						$result = $titre->fetch();
						printf($result["titre"]);
						
					?>
					</h1>
				</div>
					<center>
					<?php
						$image = $bd->query("SELECT image FROM anime WHERE id=$id");
						$img = $image->fetch();
						printf($img["image"]);
					?>
					</center>
			</div>
			
			<div id="article">
				<div id ="titre">
				INFORMATIONS GENERALES
				</div>
					<?php
						$infos = $bd->query("SELECT infos FROM anime WHERE id=$id");
						$result = $infos->fetch();
						printf($result["infos"]);
					?>
			</div>
			
	

			
		
	</body>
</html>