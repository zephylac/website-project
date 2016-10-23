<!DoCTYPE hmtl>
<html>
        <head>
                <meta charset="UTF8">
		<link href="main.css" rel="stylesheet" type="text/css"></link>  
		<title> Ludothèque de SPI-ville </title>
        </head>
        <body>
		



		<div id="header">
			<img id="image" src="Pictures/jeux.png"/>
			<img id="logo" src="Pictures/Logo.png"/>
		</div>	

		<div id="main_block">
			<div id="nav-left">
				<p>
					<a href="index.php">Accueil</a><br />
					<a href="connexion.php">S'identifier</a><br />
					<a href="#">Actualités</a><br />
					<a href="#">Nos Jeux</a><br />
					<a href="nous_contacter.php">Nous contacter</a><br />
				</p>
			</div>

				
		
			<div id="nav-right">

				<div id="horloge">
					<script type="text/javascript" src="http://www.service-gratuit-fr.com/horloges.php?id=301829&w=150&h=150"></script><noscript><a href="http://www.service-gratuit-fr.com" target="_blank">Horloge en Flash</a>
					</noscript>
					<p>
						<?php
							$date = date("d/m/Y");
							$jour = date("l");
							$heure = date("H:i");
							$h = date("H");

					
							//Test si la ludothèque est en ce moment ouverte ou fermé
							if(strcmp($jour,'Monday') == 0 && ($h >= 9 || $h <= 17))
								echo "Ouvert<br />";
							else if(strcmp($jour,'Tuesday') == 0 && ($h >= 9 || $h <= 17))
								echo "Ouvert<br />";
							else if(strcmp($jour,'Wednesday') == 0 && ($h >= 9 || $h <= 12 || $h >= 14 || $h <= 17))
								echo "Ouvert<br />";
							else if(strcmp($jour,'Thursday') == 0 && ($h >= 9 || $h <= 17))
								echo "Ouvert<br />";
							else if(strcmp($jour,'Friday') == 0 && ($h >= 9 || $h <= 17))
								echo '<p id="ouvert">Ouvert<br /></p>';
							else echo '<p id="ferme">Fermé<br /></p>';
						?>
					</p>
				</div>

				<table border="0">
					<tr>
						<td>Lundi</td>
						<td>: 9h à 17h</td>
					</tr>
						<td>Mardi</td>
						<td>: 9h à 17h</td>
					</tr>
					</tr>
						<td>Mercredi</td>
						<td>: 9h à 12h - 14h à 17h</td>
					</tr>
					<tr>
						<td>Jeudi</td>
						<td>: 9h à 17h</td>
					</tr>
					<tr>
						<td>Vendredi</td>
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
		
			<div id="nav-mid">
				<img id="labo" src="Pictures/labo.jpg"/>
				<ul>
					<li>33 rue jesaispas Le Mans (Arrêt tram Campus Ribay)</li><br />
					<li>E-mail: ludotheque.spi-ville@univ-lemans.fr</li><br />
					<li>Numero de telephone: 04 52 48 78 35</lip><br />
				</ul>
			</div>
		</div>
		
		<div id="footer">
			<p><center>Mentions légales|Charte de confidentialité|Plan du site</p>
		</div>

			

        </body>
</html>
