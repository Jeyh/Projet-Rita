<!DOCTYPE html>

<html>
	<head>
	
		<title>Projet Tuteuré Rita</title>
		<meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1" />
		<link rel="stylesheet" media="screen" type="text/css" href="styles/main.css" />
		
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
		<a id= "liste" href='index.html'>Liste</a> 
		</div>
		
		<div id="corps">
			<a href="vehicule.php"><img id ="vehicule" src="./images/vehicule.jpg" width=" 300px"	height=" 300px" top="20px"></a>
			<a href="electronique.php"><img id="electronique" src="./images/electronique.jpg" width=" 300px"	height=" 300px"></a>
			<a href="mobilier.php"><img id="mobilier" src="./images/mobilier.jpg" width=" 300px"	height=" 300px"></a>
			<a href="divertissement.php"><img id="divertissement" src="./images/divertissement.jpg" width=" 300px"	height=" 300px"></a> 
		</div>
		
		<div id="footer">
		The IUT Copyright - Tous droits réservés © 2013-2014
		</div>
	</div>

	</body>
</html>