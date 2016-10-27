<div id="header">
			<img id="image" src="Pictures/jeux.png"/>
			<img id="logo" src="Pictures/Logo.png"/>
		</div>	

		<div id="main_block">
			<div id="nav-left">
				
					<a href="index.php">Accueil</a><br />
					<a href="connexion.php">S'identifier</a><br />
					<a href="#">Actualités</a><br />
					<a href="jeux.php">Nos Jeux</a><br />
					<a href="nous_contacter.php">Nous contacter</a><br />
				
			</div>
		
			<div id="nav-right">

				<div id="horloge">
					<br />
					<script type="text/javascript" src="http://www.service-gratuit-fr.com/horloges.php?id=301829&w=150&h=150">
					</script>

					<p>
						<?php
							$date = date("d/m/Y");
							$jour = date("l");
							$heure = date("H:i");
							$h = date("H");
							$min = date("i");
					
							//Test si la ludothèque est en ce moment ouverte ou fermé
							if(strcmp($jour,'Monday') == 0 && ($h >= 9 && $h < 17))
								echo '<p class="ouvert">Ouvert<br /></p>';
							else if(strcmp($jour,'Tuesday') == 0 && ($h >= 9 && $h < 17))
								echo '<p class="ouvert">Ouvert<br /></p>';
							else if(strcmp($jour,'Wednesday') == 0 && ($h >= 9 && $h < 12 || $h >= 14 && $h < 17))
								echo '<p class="ouvert">Ouvert<br /></p>';
							else if(strcmp($jour,'Thursday') == 0 && ($h >= 9 && $h < 17))
								echo '<p class="ouvert">Ouvert<br /></p>';
							else if(strcmp($jour,'Friday') == 0 && ($h >= 9 && $h < 17))
								echo '<p class="ouvert">Ouvert<br /></p>';
							else echo '<p class="ferme">Fermé<br /></p>';
						?>
					</p>
				</div>

				<br />

				<table border="0">
					<tr>
						<td class="jours">Lundi</td>
						<td>: 9h à 17h</td>
					</tr>
						<td class="jours">Mardi</td>
						<td>: 9h à 17h</td>
					</tr>
					</tr>
						<td class="jours">Mercredi</td>
						<td>: 9h à 12h - 14h à 17h</td>
					</tr>
					<tr>
						<td class="jours">Jeudi</td>
						<td>: 9h à 17h</td>
					</tr>
					<tr>
						<td class="jours">Vendredi</td>
						<td>: 9h à 17h</td>
					</tr>
					<tr>
						<td class="jours">Samedi</td>
						<td>: Fermé</td>
					</tr>
					<tr>
						<td class="jours">Dimanche</td>
						<td>: Fermé</td>
					</tr>
				</table>
	
			</div>
