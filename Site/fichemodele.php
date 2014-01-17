<?php
	include "header.php";
	include "menu.php";
 
	include ("connexionbd.php");		
?>	
		
		<div id="corps">
		
		<?php
			if(isset($_GET['choice']))
			{
				$result = $bd->query("SELECT * FROM `modele`  WHERE `ID` = ".$_GET['choice']);
				while ( $data = $result -> fetch (PDO::FETCH_ASSOC))
				{
					echo "<img src='".$data['screen']."' />";
					echo "<br/>";
				}
				$result->closeCursor();
			}
		?>
		</div>
		
		
<?php
	include "footer.php";
?>
