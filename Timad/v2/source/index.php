<?php 
include("head.php");
	
		echo '<body>' ;
		echo '<div>' ; 
			echo '<img src="bandeau.PNG" alt="bandeau" id="bandeau"/>' ;
		echo '</div>' ;

		
	echo '<div id="content">' ;
		echo '<div id="Article1">' ;
			echo '<h3 class="titreContent"> Enseigne de la semaine </h3>' ;
			echo '<div class="img-art">' ; echo '<img src="SalonDeLaSemaine.jpg" alt="SalonDeLaSemaine.jpg" />' ; echo '</div>' ;
			echo '<p class="texte">Nom:	XXXXX' ; echo '</p>' ;
			echo 'Adresse: WWWWWWW' ; echo '</p>' ;
			echo 'Ajouter d\'autre spécification' ; echo '</p>' ;
		echo '</div>' ;

		echo '<div id="Article2">' ;
			echo '<h3 class="titreContent"> Rechercher une enseigne </h3>' ;
			echo '<form method="get" action="Recherche.php">' ;
						echo 'Nom de l\'enseigne: ' ;
						echo '<input type="text" name="Nom" />' ;
						 echo '<input type="submit" value="Valider" />' ;

			echo '</form>' ;

		echo '</div>' ;
	echo '</div>' ;

	echo '</div>' ;
	
	include("foot.php");
?>



