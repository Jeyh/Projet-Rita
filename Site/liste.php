<!DOCTYPE html>

<html>
	<head>
	
		<title>Projet Tuteuré Rita</title>
		<meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1" />
		<link rel="stylesheet" media="screen" type="text/css" href="styles/main.css" />
		<?php include ("connexionbd.php"); ?>
	</head>
	
	<body>
	
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
		<a id= "liste" href='Liste.php'>Liste</a> 
		</div>
		
		<div id="corps">
			
			<?php
			
			$Cat=-1; 
			
			$result = $bd->query("SELECT * FROM `modele`  ORDER BY `nom`");
			
			while ($data = $result-> fetch() )
			{	
				//echo '<a href="'.$data['URL'].'">';
				?>
				<a href="fichemodele.php?id=<?php echo $data['Nom']; ?>"><?php echo $data['Nom']; ?></a>
				<?php
				echo '<br>';
			}
			
			
			
			?>
			<!--<a href="divertissement.php"><img id="divertissement" src="./images/Categories/divertissement.jpg" width=" 300px"	height=" 300px"></a> -->
		</div>
		
		<div id="footer">
		The IUT Copyright - Tous droits réservés © 2013-2014
		</div>
	</div>

	</body>
</html>