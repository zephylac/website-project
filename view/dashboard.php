//This file will exit a table which contains all the item that the user has reserved
// This file is only used with the dashboard
<?php
	require 'db_controller.php';
	require 'connect.php'
    $valide = verif();
    if ($valide != 1){
      //affichge de la page de connexion
    }
    else{
      $sql = 'SELECT * FROM Paniers ORDER BY Creneau';
      $result = db_request($sql);
      echo '<table id="table-jeux"><tr>';
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
?>
