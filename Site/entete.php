<div>

	<?php
	$bd = false;
	try
	{
		 $bd= new PDO('mysql:host=localhost;dbname=estivsolvignon_site', 'root', '');

	}
	catch (Exception $e)
	{
			die('Erreur : ' . $e->getMessage());
	}
	
	global $bd;
	?>
</div>
		