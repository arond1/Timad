<?php
    $ch = curl_init();
 
    curl_setopt($ch, CURLOPT_URL, "localhost:8090/magasins?ville=".$_GET['recherche']);
 
    // Download the given URL, and return output
    curl_exec($ch);
 
    // Close the cURL resource, and free system resources
    curl_close($ch);
?>

<!DOCTYPE html>
<html>

	<?php include("head.php");
	if(isset($_GET['Nom']) && trim($_GET['Nom']) !='')
	{
		$_SESSION['Nom'] = $_GET['Nom'];
		$nom = $_SESSION['Nom'];
		
		
	}
	?>
		<body>
		<div>
			<img src="bandeau.PNG" alt="bandeau" id="bandeau"/>
		</div>


			
	<div id="content">

		<div id="Article2">
			<h3 class="titreContent"> Résultats </h3>

				<table>
					<tr>
						<?php 
						$url = "localhost:8090/magasins?ville=paris" ;
						$varia = http_get($url,$info) ;
						echo 'coucou' ;
						echo $info ;
						$json = '{"Nom":"Nive","Adresse":" 54 rue machin","Ville":"Aulnay-Sous-Bois","CodePostal":"93270"}';
						$var = json_decode($json, true);
				
						if (is_array($var))
						{
							foreach ( $var as $cle => $val)
							{
								echo $cle . " : " . $val . '<br/>' ;
								
							}
						}
						
						// SELECT * FROM `salon` WHERE `Nom` LIKE 'test' 
						// $reponse = $bdd->query('SELECT * FROM `salon` WHERE `Nom` LIKE \''.$_GET['Nom'].'\' ');
						// $donnees = $reponse->fetch();
						// echo "<td> Nom Salon : ".$nom ."</td>";
						 ?>
				
						<?php
						// echo "<td> Nom Gerant : ".$donnees['Gerant']."</td>";
						?>
					</tr>
				</table>


		</div>
	</div>

	</div>
	
<?php include("foot.php"); ?>
<?php// $reponse->closeCursor(); ?>
	</body>
</html>