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
						try
						{
							$bd= new PDO('mysql:host=localhost;dbname=rita', 'root', '');
						}
						catch (Exception $e)
						{
							die('Erreur : ' . $e->getMessage());
						}
						
						$requete = htmlspecialchars($_POST['requete']);

						$req = $bd->prepare("SELECT * FROM `modele` WHERE `Nom` LIKE :nom ORDER BY `Nom`");
						
						$r = '%'.$_POST['requete'].'%';
						$req->bindparam(':nom', $r, PDO::PARAM_STR);
						
						$req->execute();

						$nb_resultats = $req->rowCount();

						if($nb_resultats != 0)
						{
				?>
							Resultat correspondant à votre recherche : </br></br>
							<?php
							while($donnees = $req->fetch()) 
							{
							?>
								<a href="fichemodele.php?id=<?php echo $donnees['Nom']; ?>"><?php echo $donnees['Nom']; ?></a><br/>
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