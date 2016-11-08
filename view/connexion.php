<!DOCTYPE hmtl>
<html>
        <head>
                <meta charset="UTF8">
		<link href="identification.css" rel="stylesheet" type="text/css"></link>  
		<title> Ludothèque de SPI-ville </title>
        </head>
        <body>
		<h1> SPI-VILLE </h1>
		<div id="blok-connexion">
			<form id="formulaire" method="post" action="../function/login.php">
			  	<h2 id="identification" >Connexion</h2>
					<table id="tableau">
						
						<tr>
							<td class="form"> Nom </td>
						</tr>
						<tr>	
							<td> <input class="case" name="nom" type="text"/><br /></td>
						</tr>

						<tr>
							<td class="form"> Numéro carte d'adhérent </td>
						</tr>
						<tr>
							<td> <input class="case" name="id" type="number"/><br /> </td>
						</tr>
						
					</table>
					<input class="bouton" type="submit" name="connect" value="Connection"/><br />
				<br /><p> Vous êtes nouveau à la Ludothèque? </p>
				<p id="new"> Rendez-vous à notre Ludothèque <a href="../nous_contacter.php"> ici</a> afin de valider votre inscription </p>

			</form>
		</div>
	</body>
</html>
