//Display the info from the item selected in the game list
<?php
	require ('db_controller.php');
  if(isset($_POST["jeux"])){
		$jeux = $_POST["jeux"];
    $result = db_request("SELECT * FROM `Jeux` NATURAL JOIN `JeuxLudotheque` WHERE `Nom`=".$jeux."");
    while ($donnees = mysql_fetch_array($Reponse) ){
    	//Display the result
      echo '<p> '.$donnees[0].$donnees[1].$donnees[2].$donnees[3].$donnees[4].'</p>';
			echo '<form id="item_res" method="post" action='A DETERMINER'>';
			echo '<input type="submit" name="jeux_res" value=".$jeux."></form>';
			echo '<a href="../reserver-jeux.php" onclick="document.getElementById("item_res").submit()">Reserver</a>';
          }
?>
