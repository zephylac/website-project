<?php
//This file will exit a table which contains all the item that the user has reserved
// This file is only used with the dashboard
$test = verif();
if ($test != 1){
	//L'utilisateur n'est pas log, on affiche donc la page de connexion
	include './view/connexion.php';
}
else{
	$sql = 'SELECT * FROM FC_grp1_Paniers ORDER BY Creneau';
	$result = db_request($sql);
	echo '<div id="nav-mid"><br /><p>L\'état de vos reservation</p><hr />';
	if(mysql_num_rows($result) == 0){
		echo "<p> Vous n'avez pas de réservation en cours</p>";
	}
	else{	
		echo '<table id="table-jeux"><tr>';
		$i = 0;
		while ($i < mysql_num_fields($result)){
			$fieldName = mysql_field_name($result, $i);
			//Here we can add filter if we don't want to show some column.
			echo '<th>' . $fieldName . '</th>';
			$i = $i + 1;
	      	}	
	        echo '</tr>';
       		$i = 0;
	        while ($row = mysql_fetch_row($result)){
        		$count = count($row);
              		$y = 0;
	              	echo '<tr>';
        	      	while ($y < $count){
                		$c_row = current($row);
                      		//Here we can add filter if we don't want to show some column
	                      	echo '<td>' . $c_row . '</td>';
        	              	next($row);
                	     	$y = $y + 1;
	              	}
        	   	echo '</tr>';
             		$i = $i + 1;
		}
	        echo '</table>';
        	mysql_free_result($result);
	}
	echo '</div>';
}   
?>
