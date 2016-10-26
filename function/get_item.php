<?php
	if(!isset($_POST["filter"])){
		//If there is no filter given, it will be sorted by DEFAULT whith the following value
		$order = 'TypeJeux';	
	}
	else{
		$order = $_POST["order"];
      		$result = db_request("SELECT * FROM `Jeux` NATURAL JOIN `JeuxLudotheque` ORDER BY ".$order."");
	 	while ($i < mysql_num_fields($result)){
          		$fieldName = mysql_field_name($result, $i);
          		//Here we can add filter if we don't want to show some column.
          		echo '<th>' . $fieldName . '</th>';
          		$i = $i + 1;
        	}	
        echo '</tr>';
        $i = 0;

        while ($row = mysql_fetch_row($result)){
         	echo '<tr>
		<form id='.$c_row.' action="reserver.php">
		<input type="hidden" name="jeux" value="'.$c_row.'"/>
		</form>';
		
          	$count = count($row);
          	$y = 0;
          	while ($y < $count){
                  	$c_row = current($row);
                  	//Here we can add filter if we don't want to show some column
                  	echo '<td><a href='#' onclick="document.getElementById('.$c_row.').submit()">' . $c_row . '</a></td>';
                  	next($row);
                  	$y = $y + 1;
          	}
          	echo '</tr>';
          	$i = $i + 1;
        }
        mysql_free_result($result);
    	?>
