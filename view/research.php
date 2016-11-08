<?php echo '	
<form id="formulaire" method="get" action="./liste-jeux.php">
	<select name="att">
		<option value="TypeJeux">Type de jeux</option>
		<option value="Nom">Nom</option>
		<option value="Ages">Age</option>
	</select>
	<select name="value">';
	$sql = 'SELECT DISTINCT('.$_GET["att"].') FROM FC_grp1_Jeux NATURAL JOIN FC_grp1_JeuxLudotheque';
	$result = db_request($sql);
	echo '<select name="value">';
	while ($donnees = mysql_fetch_array($result)) {
		echo '<option value="'.$donnees[0].">'.$donnees[0].'</option>';
	}
	echo '</select>';
	if(!isset($_GET["order"])){
		//If there is no filter given, it will be sorted by DEFAULT whith the following value
		$order = 'Nom';
	}
	else{
		$order = $_GET["order"];
	}
	$sql = "SELECT * FROM FC_grp1_Jeux NATURAL JOIN FC_grp1_JeuxLudotheque WHERE ".$GET_['att']."='".$GET_['value']."'ORDER BY ".$order."";
	$result = db_request($sql);
	echo'
</form>
<form method="get" action="./liste-jeux.php">
	<select name=order>
		<option value="TypeJeux">Type de jeux</option>
		<option value="Nom">Nom</option>
		<option value="Ages">Age</option>
	</select>
	<input type="submit" value="filter"/><br />
</form>
?>
