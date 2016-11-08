<?php  
if(isset($_GET["jeux"])){
	$jeux = $_GET["jeux"];
	$result = db_request("SELECT * FROM FC_grp1_Jeux NATURAL JOIN FC_grp1_JeuxLudotheque WHERE Nom='".$jeux."'");	
	echo '<div id="nav-mid">';
	echo '	<form id="formulaire" method="get" action="./reserver-jeux.php">
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
	while ($donnees = mysql_fetch_array($result) ){
		//Display the result
		echo '<br /><br /><ul> <li>Jeux: '.$donnees[0].'</li><li>Tranche d\'âge recommandé: '.$donnees[1].' ans</li><li>Description: '.$donnees[2].'</li><li>Type de jeu: '.$donnees[3].'</li><li>Nombre de jeux disponibles: '.$donnees[5].'</li></ul>';	
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
