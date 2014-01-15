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
				<?php
					if(isset($_POST['requete']) && $_POST['requete'] != NULL)	
					{
						$r = $_POST['requete'];
						try
						{
							$bd= new PDO('mysql:host=localhost;dbname=rita', 'root', '');
						}
						catch (Exception $e)
						{
								die('Erreur : ' . $e->getMessage());
						}
						
						$requete = htmlspecialchars($_POST['requete']);
						
						$req = $bd->prepare("SELECT * FROM test WHERE titre LIKE ?");
						$req->execute(array($r.'%'));

						$nb_resultats = $req->rowCount();

						if($nb_resultats != 0)
						{
				?>
							Resultat correspondant à votre recherche : </br></br>
							<?php
							while($donnees = $req->fetch()) 
							{
							?>
								<a href="index.php?id=<?php echo $donnees['id']; ?>"><?php echo $donnees['titre']; ?></a><br/><br/>
							<?php
							}
						}
						else
							echo "Aucun objet ne correspondant a votre recherche <br/><br/>";
					}	
							?>		
		</div>
		<div id="footer">
		The IUT Copyright - Tous droits réservés © 2013-2014
		</div>
		</div>
</html>