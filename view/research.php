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
echo '</select>';

echo'
</form>

<form id="form2" method="get">
	<input type="hidden" name="att" value="'.$att.'">
	<select name="value" onchange=\'document.forms["form2"].submit();\'>';
		$sql = 'SELECT DISTINCT('.$att.') FROM FC_grp1_Jeux NATURAL JOIN FC_grp1_JeuxLudotheque';
		$result = db_request($sql);
		

		while ($donnees = mysql_fetch_array($result)) {
			


			if($value == $donnees[0]){
					echo '<option value="'.$donnees[0].'" selected>'.$donnees[0].'</option>';
			}
			else{
				echo '<option value="'.$donnees[0].'">'.$donnees[0].'</option>';
			}
		}
		echo '
	</select>
</form>';
?>
