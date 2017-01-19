<!DOCTYPE html>
<html>

	<?php include("head.php"); ?>
	
	<body>

		<nav>
  			<ul id="navigation">
				<li> 
					<a href="http://aquanux/~11504512/projet/accueil.html"><img src="nav_home_log.png" alt="Home" class="img-nav"/></a> 
				</li>
    			<li class="liN onglet"> <a id="assoc" href="http://aquanux/11504512/projet/association.html">Paris</a> </li>
    			<li class="liN onglet"> <a id="actu" href="http://aquanux/~11504512/projet/actualité.html"	>Lyon</a></li>
    			<li class="liN onglet"> <a id="galerie" href="http://aquanux/~11504512/projet/galerie.html"	>Marseille</a> </li>
    			<li class="liN onglet"> <a id="shop" href="http://aquanux/~11504512/projet/shop.html"		>Lille</a> </li>
    			<li class="liN onglet"> <a id="forum" href="http://aquanux/~11504512/projet/forum.html"		>Toulouse</a> </li>
    			<li class="liN onglet"> <a id="contact" href="http://aquanux/~11504512/projet/contact.html"	>Bordeaux</a> </li>
    			<li> 			
						<form role="search" method="get" class="forme" action="https://www.google.fr/">
							<label>
								<input type="recherche" 
											class="espace-recherche" 
											placeholder="Recherche une enseigne"  
											value="" name="q" 
											title="Rechercher:">
							</label>
							<input type="submit" class="rech" value="Recherche" name="q">
						</form>
 					</li>
			</ul>
		</nav>
		
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
			<form method="post" action="traitement.php">
				<table>
					<tr>
						<td>Nom de l'enseigne</td> <td><input type="text" name="Nom" /></td>  
					</tr>
				</table>

			</form>

		</div>
	</div>

	</div>
	
	<?php include("foot.php"); ?>

	</body>
</html>





















