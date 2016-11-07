<?php  
require ('./function/db_controller.php');
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
		echo '<p> '.$donnees[0].$donnees[1].$donnees[2].$donnees[3].$donnees[4].'</p>';	
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
