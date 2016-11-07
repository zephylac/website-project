<?php
	require ('./function/db_controller.php');
	if(!isset($_GET["filter"])){
		//If there is no filter given, it will be sorted by DEFAULT whith the following value
		$order = 'Nom';	
	}
	else{
		$order = $_GET["order"];
	}
	$sql = 'SELECT * FROM FC_grp1_Jeux NATURAL JOIN FC_grp1_JeuxLudotheque ORDER BY '.$order.'';
	$result = db_request($sql);
	
	echo '<table id="table-jeux"><tr>';
	$i = 0;
	while ($i < mysql_num_fields($result)){
    		$fieldName = mysql_field_name($result, $i);
   		//Here we can add filter if we don't want to show some column.
		if($i = 0 || $i ==1 || $i == 3){
			echo '<th>' . $fieldName . '</th>';
		}
		$i = $i + 1;
	}

    	echo '</tr>';
   	$i = 0;
	while ($row = mysql_fetch_row($result)){		
	      	$count = count($row);
		$y = 0;
		echo'<tr>';
	        while ($y < $count){
        		$c_row = current($row);
        	 	//Here we can add filter if we don't want to show some column
			if($y == 0){
				echo '<td><a href="./detail-jeux.php?jeux='.$c_row.'">'.$c_row.'</a></td>';
			}
			if($y == 1 || $y == 3){
				echo '<td>'. $c_row .'</td>';	
			}	
				next($row);
         		$y = $y + 1;
        	}
        	echo '</tr>';
        	$i = $i + 1;
      	}
     	mysql_free_result($result);
	echo '</table>';
?>
