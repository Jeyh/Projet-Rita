<div>

	<?php
	$bd = false;
	try
	{
		 $bd= new PDO('mysql:host=localhost;dbname=rita', 'root', '');

	}
	catch (Exception $e)
	{
			die('Erreur : ' . $e->getMessage());
	}
	
	global $bd;
	?>
</div>
		