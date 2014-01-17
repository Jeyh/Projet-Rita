<?php
	include "header.php";
	include "menu.php";
?>
		
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
								<a href="fichemodele.php?choice=<?php echo $donnees['ID']; ?>"><?php echo $donnees['Nom']; ?></a><br/>
							<?php
							}
						}
						else
							echo "Aucun objet ne correspondant a votre recherche <br/><br/>";
					}	
							?>		
		</div>
		
<?php
	include "footer.php";
?>