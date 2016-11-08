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
		<p> Pour accèder à cette page, vous devez être connecté. Vous serez automatiquement redirigé versla page de connexion dans 5 secondes.</p>
    <br />
    <p>Si vous n'êtes pas redirigé cliquez</p><a href="./view/connexion.php>ici</a>
	</div>
</div>
		
		<div id="footer">
			<p><center>Mentions légales|Charte de confidentialité|Plan du site</p>
		</div>
        </body>
</html>
<?php
  sleep(5);
  header("location: ./view/connexion.php");
?>
