<!DOCTYPE html>
<html>

	<?php include("head.php"); ?>
	<?php include("accessbdd.php"); ?>
		<body>
		<div>
			<img src="bandeau.PNG" alt="bandeau" id="bandeau"/>
		</div>

		
	<div id="content">

		<div id="Article2">
			<h3 class="titreContent"> recherchez une enseigne </h3>
			<form method="post" action="traitement.php">
				<table>
					<tr>
						<td>Nom de l'enseigne</td> <td><input type="text" name="Nom" /></td>
						 <input type="submit" value="Valider" />
					</tr>
				</table>

			</form>

		</div>
	</div>

	</div>
	
	<?php include("foot.php"); ?>

	</body>
</html>