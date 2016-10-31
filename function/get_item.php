<?php
	require 'db_controller.php';

	if(!isset($_POST["filter"])){
		//If there is no filter given, it will be sorted by DEFAULT whith the following value
		$order = 'Nom';	
	}
	else{
		$order = $_POST["order"];
	}
		$sql = 'SELECT * FROM jeux NATURAL JOIN jeuxludotheque ORDER BY '.$order.'';
		$result = db_request($sql);
		//$result = db_request("SELECT * FROM `jeux` NATURAL JOIN `jeuxludotheque` ORDER BY ".$order."");
	 	echo'<table id="table-jeux"><tr>';
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
        while ($y < $count){
        	$c_row = current($row);
          //Here we can add filter if we don't want to show some column
					echo '<tr><form id='.$c_row.' action="../info.php"><input type="hidden" name="jeux" value="'.$c_row.'"/></form>';
					echo '<td><a href="#" onclick="document.getElementById('.$c_row.').submit()">' . $c_row . '</a></td>';
          next($row);
          $y = $y + 1;
        }
        echo '</tr>';
        $i = $i + 1;
      }
      mysql_free_result($result);
			echo '</table>';
?>
