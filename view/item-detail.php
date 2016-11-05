<?php  
require ('./function/db_controller.php');
  if(isset($_GET["jeux"])){
	  $jeux = $_GET["jeux"];
	  echo $jeux;
    	$result = db_request("SELECT * FROM FC_grp1_Jeux NATURAL JOIN FC_grp1_JeuxLudotheque WHERE Nom='".$jeux."'");
	echo '<div id="nav-mid">';
	while ($donnees = mysql_fetch_array($result) ){
    		//Display the result
	    	echo '<p> '.$donnees[0].$donnees[1].$donnees[2].$donnees[3].$donnees[4].'</p>';
	}
	echo '</div>';
  }
  else{
	  echo '<p>PB</p>';
  }
?>

