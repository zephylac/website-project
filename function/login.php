<?php
require('db_controller.php');

if(isset($_POST["connect"])){
	if(!empty($_POST["nom"])&&!empty($_POST["id"])){
		$nom = $_POST["nom"];
		$id = $_POST["id"];
    $sql = 'SELECT Client FROM FC_grp1_Paniers WHERE Client="'.$nom.'" AND Id="'.$id.'"';
    $result = db_request($sql);
    while ($donnees = mysql_fetch_array($result) ){
		if($donnees[0] != NULL){
			//Traitement si la personne a réussi à se connecter
			//On set des cookies d'une durée de 7 jours ainsi l'utilisateur n'a pas besoin de se connecter tous le temps
			setcookie('nom', $nom, time() + 7*24*3600, "/", null, false, true);
			setcookie('id', $id, time() + 7*24*3600, "/", null, false, true);
			//On redirige l'utilisateur vers son dashboard
			header("location: ../view/dashboard.php");
		}
		else{
			echo " Votre login ou votre mot de passe est faux";
		}
	}	
    
?>
