<!DoCTYPE hmtl>
<html>
        <head>
                <meta charset="UTF8">
		<meta name="viewport" content="width=device-width"/>
		<link href="main.css" rel="stylesheet" type="text/css"></link>  
		<title> Ludothèque de SPI-ville </title>
        </head>
        <body>
	<?php  include './view/header.php';?>		
			<div id="nav-mid">
				<img class="salle" src="Pictures/salle.jpg"/>
     				<img class="salle" src="Pictures/salle2.jpg"/>
     				<img class="salle" src="Pictures/salle3.jpg"/>

				
				<script>
				var myIndex = 0;
				carousel();

				function carousel() {
				    var i;
				    var x = document.getElementsByClassName("salle");
				    for (i = 0; i < x.length; i++) {
				       x[i].style.display = "none";  
				    }
				    myIndex++;
				    if (myIndex > x.length) {myIndex = 1}    
				    x[myIndex-1].style.display = "block";  
				    setTimeout(carousel, 3000); // Change les images toutes les 3 secondes
				}
				</script>

				<p> Bienvenue sur le site web de la Ludothèque SPI-VILLE! Notre association a été crée par Benjamin Di Carlo et Thibault Brocherieux en 2016. <br /> Ils eurent comme objectif de réunir dans une ambiance conviviale plusieurs personnes de toutes générations autour de plusieurs jeux ludiques et divertissants afin de satisfaire les goûts de chacun. 				</p>
				<p> Notre ludothèque est située un peu à l'écart du centre ville mais accessible directement en tramway.
				</p>
			</div>
		</div>
		
		<div id="footer">
			<p><center>Mentions légales|Charte de confidentialité|Plan du site</p>
		</div>
        </body>
</html>
