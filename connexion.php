<!DoCTYPE hmtl>

<html>

        <head>

                <meta charset="UTF8">

		<link href="main.css" rel="stylesheet" type="text/css"></link>  

		<title> Ludothèque de SPI-ville </title>

        </head>

        <body>
		<?php  include './view/header.php';?>

		<div id="nav-mid-connexion">

					<form id="formulaire" method="post" action="#">

					<h2 id="identification" >S'identifier</h2>

						<table>

							<tr>

								<td> Numéro carte d'adhérent : </td>

								<td> <input type="number"/><br /></td>

							</tr>

							<tr>

								<td> Mot de passe : </td>

								<td> <input type="password"/><br /></td>

							</tr>

						</table>

						<input type="submit" value="Connexion"/><br />

					<p> Vous êtes nouveau à la Ludothèque? </p>

					<a href="creer_compte.php"> Inscription </a>

					</form>

			</div>

		</div>

		

		<div id="footer">

			<p><center>Mentions légales|Charte de confidentialité|Plan du site</p>

		</div>

        </body>

</html>
