<?php
	require('./function/db_controller.php');
	$test = verif();
	if($test == 1){
		$texte = 'Panneau utilisateur';
		$url = 'userpanel.php';
	}
	else{
		$texte = "S'identifier";
		$url = './view/connexion.php';
	}
?>
<div id="header">
			<img id="image" src="Pictures/jeux.png"/>
			<img id="logo" src="Pictures/Logo.png"/>
		</div>	
		<div id="main_block">
			<div id="nav-left">
				
					<a href="index.php">Accueil</a><br />
				<?php echo'<a href="'.$url.'">'.$texte.'</a><br />';?>
					<a href="actualites.php">Actualités</a><br />
					<a href="liste-jeux.php">Nos Jeux</a><br />
					<a href="nous_contacter.php">Nous contacter</a><br />
				<?php if($test == 1){echo'<a href="./function/logout.php">Se déconnecter</a><br />';}?>
			</div>
		
			<div id="nav-right">

				<div id="horloge">
					<br />
						<article class="clock">
						  <div class="hours-container">
						    <div class="hours"></div>
						  </div>
						  <div class="minutes-container">
						    <div class="minutes"></div>
						  </div>
						  <div class="seconds-container">
						    <div class="seconds"></div>
						  </div>
						</article>
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
							
						echo'<p>'.$heure.'</p>';
						echo'<p>'.$date.'</p><br />';
						echo'<p>';
					?>
					</p>
				</div>

				<hr></hr>
				<br />
				
				<h3> Horaires </h3>
				<ul id="planning">
					<li><span>Lundi</span>: 9h à 17h</li>
					<li><span>Mardi</span>: 9h à 17h</li>
					<li><span>Mercredi</span>: 9h à 12h - 14h à 17h</li>
					<li><span>Jeudi</span>: 9h à 17h</li>
					<li><span>Vendredi</span>: 9h à 17h</li>
					<li><span>Samedi</span>: Fermé</li>
					<li><span>Dimanche</span>: Fermé</li>
				</ul>
	
			</div>
