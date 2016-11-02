<!DoCTYPE hmtl>
<html>
        <head>
                <meta charset="UTF8">
		<link href="identification.css" rel="stylesheet" type="text/css"></link>  
		<title> Ludothèque de SPI-ville </title>
        </head>
        <body>
		<h1> SPI-VILLE </h1>
		<div id="blok-connexion">
			<form id="formulaire" method="post" action="function/login.php">
			  	<h2 id="identification" >Connexion</h2>
					<table id="tableau">
						<tr>
							<td class="form"> Numéro carte d'adhérent </td>
						</tr>
						<tr>
							<td> <input class="case" type="text"/><br /> </td>
						</tr>
							<td class="form"> Mot de passe </td>
						</tr>
						<tr>	
							<td> <input class="case" type="password"/><br /></td>
						</tr>
					</table>
					<input class="bouton" type="submit" value="Connexion"/><br />
				<br /><p> Vous êtes nouveau à la Ludothèque? </p>
				<a href="inscription.php"> Inscription </a>
			</form>
		</div>
	</body>
</html>
