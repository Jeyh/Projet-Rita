<?php
	include "header.php";
	include "menu.php";
	include "connexionbd.php";
?>
	
		<div id="corps">
			
			<?php
				if (isset ($_GET['choice']))
				{
					$req="SELECT *	FROM `categorie`	WHERE `IDCat` =".$_GET['choice'];
					$res=$bd->query($req);
					While ( $data = $res -> fetch (PDO::FETCH_ASSOC))
					{
						echo "<a href='index.php?choice=".$data['ID']."'><img src='".$data['Image']."' width='300px' height='300px'/></a>";
						echo "<a/>";

					}
					$res->closeCursor();
					
					$req="SELECT * FROM `modele` WHERE `IDCatM` = '".$_GET['choice']."'";
					$res=$bd->query($req);
					While ( $data = $res -> fetch (PDO::FETCH_ASSOC))
					{
						echo "<a href='fichemodele.php?choice=".$data['ID']."'>".$data['Nom']."</a>";
						echo "<br/>";
					}
					
				}
				
			
			
			
			
			?>
			<!--<a href="divertissement.php"><img id="divertissement" src="./images/Categories/divertissement.jpg" width=" 300px"	height=" 300px"></a> -->
		</div>
		
<?php
	include "footer.php";
?>