<!DOCTYPE hmtl>
<html>
        <head>
                <meta charset="UTF8">
		<link href="main.css" rel="stylesheet" type="text/css"></link>  
		<title> Ludothèque de SPI-ville </title>
        </head>
        <body>
	<?php  include './view/header.php';?>
  <div id="nav-mid">
		<form id="formulaire" method="get" action="./liste-jeux.php">
			<select name=order>
				<option value="TypeJeux">Type de jeux</option>
				<option value="Nom">Nom</option>
				<option value="Ages">Age</option>
				<option value="NbJeux">Jeux au total</option>
				<option value="NbJeuxDispos">Jeux Disponibles</option>
			</select>
		</form>
		<input type="submit" value="filter"/><br />
		<?php  include './view/item-list.php';?>
	</div>
</div>
		
		<div id="footer">
			<p><center>Mentions légales|Charte de confidentialité|Plan du site</p>
		</div>
        </body>
</html>
