<?php
require('db_controller.php');

if(isset($_POST["connect"])){
	if(!empty($_POST["nom"])&&!empty($_POST["id"])){
		$nom = $_POST["nom"];
		$id = $_POST["id"];
		$sql = 'SELECT Client FROM FC_grp1_Membres WHERE Client="'.$nom.'" AND Id="'.$id.'"';
		$result = db_request($sql);
		if(mysql_num_rows($result) == 0){
			//Traitement si la personne a rentré un id/nom faux
			header("location: ../view/connexion.php");	
		}
		else{
			//Traitement si la personne a réussi à se connecter
			//On set des cookies d'une durée de 7 jours ainsi l'utilisateur n'a pas besoin de se connecter tous le temps
			setcookie('nom', $nom, time() + 7*24*3600, '/', null, false, true);
			setcookie('id', $id, time() + 7*24*3600, '/', null, false, true);
			//On redirige l'utilisateur vers son dashboard
			header("location: ../userpanel.php");		
		}
		
	}
}	
?>
