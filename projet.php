<!DoCTYPE hmtl>
<html>
        <head>
                <meta charset="UTF8">
		<link href="main.css" rel="stylesheet" type="text/css"></link>  
		<title> Ludothèque de SPI-ville </title>
        </head>
        <body>
		<div id="Menus">
		<ul id="+-demo2">
			<li><a href="#">Accueil</a></li>
			<li><a href="#">Actualités</a></li>
			<li><a href="#">Nos Jeux</a></li>
			<li><a href="#">Nous contacter</a></li>
		</ul>
		</div>

		<div id="main_bloc">
			<h3>Bienvenue sur la Ludothèque SPI-Ville</h3>
				<p>
				</p>
		</div>		
		
		<div id="sidebar">
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
		</div>

		<div id="horloge">
			<p>
				<?php
					$date = date("d/m/Y");
					$heure = date("H:i");
					echo $heure;
				?>
			</p>
		</div>	
					
		
		<div id="footer">
			<p><center>Mentions légales|Charte de confidentialité|Plan du site</p>
		</div>

			

        </body>
</html>

