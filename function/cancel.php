<?php
//This file will exit a table which contains all the item that the user has reserved
// This file is only used with the dashboard
$test = verif();
if ($test != 1){
	//L'utilisateur n'est pas log, on affiche donc la page de connexion
	include './view/connexion.php';
}
else{
	if(isset($_GET["jeux"])&&isset($_GET["date"])){	
		$jeux = $_GET["jeux"];
		$date = $_GET["date"];
		$sql = "DELETE FROM FC_grp1_Paniers WHERE Jeux='".$jeux"' AND Creneau='".$date."'";
		$result = db_request($sql);
		header("location: ../userpanel.php");
	}
        	mysql_free_result($result);
}
?>
