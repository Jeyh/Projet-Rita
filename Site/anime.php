<!DOCTYPE html>

<html>
	<head>
		<title>Nom du site - Anime</title>
		<link rel="stylesheet" href="cssaccueil.css">
	</head>

	<body>		
		<?php include("barre_de_recherche.php"); ?>
		
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
			
			<div id="article">
				<div id ="titre">
				RESUME
				</div>
					<?php
						$resume = $bd->query("SELECT resume FROM anime WHERE id=$id");
						$result = $resume->fetch();
						printf($result["resume"]);
					?>
			</div>
			
			<div id="article">
				<div id ="titre">
				CRITIQUE
				</div>
					<?php
						$critique = $bd->query("SELECT critique FROM anime WHERE id=$id");
						$result = $critique->fetch();
						printf($result["critique"]);
					?>
			</div>
			
			<div id="article">
				<div id ="titre">
				VOTES
				</div>
					<form method="POST" name="formulaire">
                    <input type="radio" name="choix" value="0">0
                    <input type="radio" name="choix" value="1">1
                    <input type="radio" name="choix" value="2">2
                    <input type="radio" name="choix" value="3">3
                    <input type="radio" name="choix" value="4">4
                    <input type="radio" name="choix" value="5">5
                    <input type="radio" name="choix" value="6">6
                    <input type="radio" name="choix" value="7">7
                    <input type="radio" name="choix" value="8">8
                    <input type="radio" name="choix" value="9">9
                    <input type="radio" name="choix" value="10">10 </br></br>    

                    <input type="submit" id="bouton_vote" value="Votez!"></br>    
                    </form>
					
                    Moyenne actuelle du manga :
                    <?php
						$votes = $bd->query("SELECT nbVotes FROM anime WHERE id=$id");
						$nbVotes = $votes->fetch();
						$moyenne = $bd->query("SELECT moyenne FROM anime WHERE id=$id");
						$result = $moyenne->fetch();
						
                        if (isset($_POST['choix'])&& $_POST['choix']!=NULL && is_numeric($_POST['choix'])){
							$v = $nbVotes["nbVotes"];
							$votants = floatval($v);
                            $c = $_POST['choix'];
							$choix = floatval($c);
							$r = floatval($result["moyenne"]);
							
                            $sum=$r*$votants;
							$sum+=$choix;
							
							$votants+=1;
							$bd->exec("UPDATE anime SET nbVotes='$votants' WHERE id=$id");
							
							$moy=$sum/$votants;
                            $bd->exec("UPDATE anime SET moyenne='$moy' WHERE id=$id");
                        }
						
                        $moyenne = $bd->query("SELECT moyenne FROM anime WHERE id=$id");
						$result = $moyenne->fetch();
                        printf($result["moyenne"]);
                    ?>
					/10
			</div>
			
		</div>
		
		

			
		
	</body>
</html>