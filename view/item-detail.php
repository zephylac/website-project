<?php  
if(isset($_GET["jeux"])){
	$jeux = $_GET["jeux"];
	$result = db_request("SELECT * FROM FC_grp1_Jeux NATURAL JOIN FC_grp1_JeuxLudotheque WHERE Nom='".$jeux."'");	
	echo '<div id="nav-mid">';
	
	while ($donnees = mysql_fetch_array($result) ){
		//Display the result
		echo '<div class="detail">';
			echo '<h2>'.$donnees[0].'</h2>';
			
			if($donnees[5] > 0){
				echo '<p class="ouvert"> Disponible </p>';
			}
			else
				echo '<p class="ferme"> Non disponible </p>';
			
			echo '<div class="description">
						<h3>Description du jeu</h3>
						<p>'.$donnees[2].'</p>
						<p> C\'est un jeu de type '.$donnees[3].' et nous le recommandons pour les personnes ayant de '.$donnees[1].' ans.';
			echo '</div>';
	}
	
	echo '	<form id="reserv" id="formulaire" method="get" action="./reserver-jeux.php">
			<select name=date>
				<option value="9-10">9h à 10h</option>
				<option value="10-11">10h à 11h</option>
				<option value="13-14">13h à 14h</option>
				<option value="14-15">14h à 15h</option>
			</select>
				<input type="hidden" name="jeux" value="'.$jeux.'" />
				<input type="submit" value="reserver"/><br />	
			</form>';
		
	if(mysql_num_rows($result) == false){
		echo 'Jeux invalide';
		echo '<script language="javascript">';                              
		echo 'alert("Jeux invalide")';                             
		echo '</script>';
	}
	echo '</div>';
}
else{
	echo '<script language="javascript">';                              
	echo 'alert("L\'URL n\'est pas valide")';                             
	echo '</script>';	    
	echo '<p>Le jeux sélectionné n\'est pas valide</p>';
}

?>
