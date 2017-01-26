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

				<table>
					<tr>
						<?php 
						//SELECT * FROM `salon` WHERE `Nom` LIKE 'test' 
						$reponse = $bdd->query('SELECT * FROM `salon` WHERE `Nom` LIKE \''.$_POST['Nom'].'\' ');
						$donnees = $reponse->fetch();
						echo "<td> Nom Salon : ".$donnees['Nom']."</td>";
						?>
						<br/>
						<?php
						echo "<td> Nom Gerant : ".$donnees['Gerant']."</td>";
						?>
					</tr>
				</table>


		</div>
	</div>

	</div>
	
	<?php include("foot.php"); ?>
<?php $reponse->closeCursor(); ?>
	</body>
</html>