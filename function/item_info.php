//Display the info from the item selected in the game list
<?php
  if(isset($_POST["jeux"])){
			$jeux = $_POST["jeux"];
      		$result = db_request("SELECT * FROM `Jeux` NATURAL JOIN `JeuxLudotheque` WHERE `Nom`=".$jeux."");

          while ($donnees = mysql_fetch_array($Reponse) ){
          //Display the result
          echo "<p> ".$donnees[0].$donnees[1].$donnees[2].$donnees[3].$donnees[4]."</p>
		<form id='item_res' method='post' action=''>
		<input type='hidden' name='jeux_res' value=".$donnees[0].">
		</form>
		<a href='reserver.php' onclick='document.getElementById('item_res').submit()'>Reserver</a>";
          }
?>
