<!DOCTYPE html>

<html>
	<head>
		<title>Nom du site - Resultat de recherche</title>
		<link rel="stylesheet" href="cssaccueil.css">
	</head>

	<body>
		
		<?php include("barre_de_recherche.php"); ?>
		
		<div id ="articles">
			<div id ="article">
				<div id ="titre">
					<!--R�sultats correspondant � votre recherche : !-->
				</div>
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
							<h3> Objets : </h3>
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
					//else 
						//echo "Entrer une recherche";
				?>
			</div>
		</div>
		
	</body>
</html>