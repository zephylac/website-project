<?php 
if(!isset($_GET["att"])){
	$att = "Null";	
}
else{
	$att = $_GET["att"];
}
echo '
<form id="form1" method="get">
	<select name="att" onchange=\'document.forms["form1"].submit();\'>';
$val = array('1','TypeJeux', 'Nom','Ages');
$nom = array('Tout','Type de jeux','Nom','Age');
	for ($i = 0; $i < count($val); $i ++) {
 		echo("<option value='" . $val[$i] . "'");
    	if ($val[$i] === $att) {
        	echo("selected");
    	}
    	echo(">" . $nom[$i] . "</option>");
}	
echo'
</select>
</form>
<form id="form2" method="get">
	<input type="hidden" name="att" value="'.$att.'">
	<select name="value" onchange=\'document.forms["form2"].submit();\'>';
		$sql = 'SELECT DISTINCT('.$att.') FROM FC_grp1_Jeux NATURAL JOIN FC_grp1_JeuxLudotheque';
		$result = db_request($sql);
		

		while ($donnees = mysql_fetch_array($result)) {
			if(!isset($_GET["value"])){
				$value = '';	
			}
			else{
				$value = $_GET["value"];
			}


			if($value == $donnees[0]){
					echo '<option value="'.$donnees[0].'" selected>'.$donnees[0].'</option>';
			}
			else{
				echo '<option value="'.$donnees[0].'">'.$donnees[0].'</option>';
			}
		}
		echo '
	</select>
</form>
<form id="form3" cmethod="get" >
	<input type="hidden" name="att" value="'.$att.'">
	<input type="hidden" name="value" value="'.$value.'">

	<select name=order onchange=\'document.forms["form3"].submit();\'>
		<option value="TypeJeux">Type de jeux</option>
		<option value="Nom">Nom</option>
		<option value="Ages">Age</option>
	</select>
	<input type="submit" value="filter"/><br />
</form>';
?>
