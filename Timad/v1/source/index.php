<!DOCTYPE html>
<html>

	<?php include("head.php"); session_start(); 
echo $_SERVER['PHP_SELF']; ?>
	
		<body>
		<div>
			<img src="bandeau.PNG" alt="bandeau" id="bandeau"/>
		</div>

		
	<div id="content">
		<div id="Article1">
			<h3 class="titreContent"> Enseigne de la semaine </h3>
			<div class="img-art"> <img src="SalonDeLaSemaine.jpg" alt="SalonDeLaSemaine.jpg" /> </div>
			<p class="texte">Nom:	XXXXX <br> Adresse: WWWWWWW <br> Ajouter d'autre spécification </p>
		</div>

		<div id="Article2">
			<h3 class="titreContent"> recherchez une enseigne </h3>
			<form method="get" action="Magasin.php">
				<table>
					<tr>
						<td>Nom de l'enseigne</td> <td><input type="text" name="Nom" /></td>
						<br/>
						 <td><input type="submit" value="Valider" /></td>
					</tr>
				</table>

			</form>

		</div>
	</div>

	</div>
	
	<?php include("foot.php"); ?>

	</body>
</html>





















