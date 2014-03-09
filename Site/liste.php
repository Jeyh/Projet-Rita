<?php
	include "header.php";
	include "menu.php";
	include ("connexionbd.php");
?>
		
		<div id="corps">
			
			<?php
			
			$result = $bd->query("SELECT * FROM `modele`  ORDER BY `nom`");
			
			while ($data = $result-> fetch() )
			{	
				//echo '<a href="'.$data['URL'].'">';
				?>
				<a href="fichemodele.php?choice=<?php echo $data['ID']; ?>"><?php echo $data['Nom']; ?></a>
				<?php
				echo '<br>';
			}
			
			
			
			?>
			<!--<a href="divertissement.php"><img id="divertissement" src="./images/Categories/divertissement.jpg" width=" 300px"	height=" 300px"></a> -->
		</div>
		
<?php
	include "footer.php";
?>