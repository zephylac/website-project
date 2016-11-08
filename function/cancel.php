<?php
//This file will exit a table which contains all the item that the user has reserved
// This file is only used with the dashboard
include 'db_controller.php';
$test = verif();
if ($test != 1){
	//L'utilisateur n'est pas log, on affiche donc la page de connexion
	include './view/connexion.php';
}
else{
	if(isset($_GET["jeux"])&&isset($_GET["date"])){
		$nom = $_COOKIE["nom"];
		$jeux = $_GET["jeux"];
		$date = $_GET["date"];

		$sql = "SELECT * FROM FC_grp1_Paniers WHERE Jeux='".$jeux."' AND Creneau='".$date."'";
		$result = db_request($sql);
		$number = mysql_num_rows($result);
		
		$sql = "DELETE FROM FC_grp1_Paniers WHERE Jeux='".$jeux."' AND Creneau='".$date."'";
		$result = db_request($sql);

		$sql = "UPDATE FC_grp1_JeuxLudotheque SET NbJeuxDispos = NbJeuxDispos+1 WHERE Nom='".$jeux."'";
		$result = db_request($sql);	

		if($number > 1){
			for($i = 1; $i < $number; $i++){
				$sql = "INSERT INTO FC_grp1_Paniers (Jeux, Client, Creneau) VALUES ('".$jeux."','".$nom."','".$date."')";
				$result = db_request($sql);
			}
		}
		header("location: ../userpanel.php");
	}
}
?>
