<!DoCTYPE hmtl>
<html>
        <head>
                <meta charset="UTF8">
		<link href="main.css" rel="stylesheet" type="text/css"></link>  
		<title> Ludothèque de SPI-ville </title>
        </head>
        <body>
		<div id="header">
			<h3>Bienvenue sur la Ludothèque SPI-Ville</h3>
				<p>
				</p>
		</div>	

		<div id="main_block">
			<div id="nav-left">
				<ul id="+-demo2">
					<li><a href="#">Accueil</a></li>
					<li><a href="#">Actualités</a></li>
					<li><a href="#">Nos Jeux</a></li>
					<li><a href="#">Nous contacter</a></li>
				</ul>
			</div>

				
		
		<div id="nav-right">
			<table border="0">
				<tr>
					<td>Lundi:</td>
					<td> 9h à 17h</td>
				</tr>
					<td>Mardi:</td>
					<td> 9h à 17h</td>
				</tr>
				</tr>
					<td>Mercredi:</td>
					<td> 9h à 12h - 14h - 17h</td>
				</tr>
				<tr>
					<td>Jeudi:</td>
					<td> 9h à 17h</td>
				</tr>
				<tr>
					<td>Vendredi:</td>
					<td> 9h à 17h</td>
				</tr>
			</table>

			<div id="horloge">
				<p>
					<?php
						$date = date("d/m/Y");
						$jour = date("l");
						$heure = date("H:i");
						$h = date("H");
						echo $heure."<br />";
					
						//Test si la ludothèque est en ce moment ouverte ou fermé
						if(strcmp($jour,Monday) == 0 && ($h >= 9 || $h <= 17))
							echo "Ouvert<br />";
						else if(strcmp($jour,Tuesday) == 0 && ($h >= 9 || $h <= 17))
							echo "Ouvert<br />";
						else if(strcmp($jour,Wednesday) == 0 && ($h >= 9 || $h <= 12 || $h >= 14 || $h <= 17))
							echo "Ouvert<br />";
						else if(strcmp($jour,Thursday) == 0 && ($h >= 9 || $h <= 17))
							echo "Ouvert<br />";
						else if(strcmp($jour,Friday) == 0 && ($h >= 9 || $h <= 17))
							echo '<p id="ouvert">Ouvert<br /></p>';
						else echo '<p id="ferme">Fermé<br /></p>';
					?>
				</p>
			</div>	
		</div>
		
		<div id="nav-mid">
			<p> Hello </p>
		</div>
		
		<div id="footer">
			<p><center>Mentions légales|Charte de confidentialité|Plan du site</p>
		</div>

			

        </body>
</html>

