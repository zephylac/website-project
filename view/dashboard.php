<?php
//This file will exit a table which contains all the item that the user has reserved
// This file is only used with the dashboard
    require './function/db_controller.php';
/*    echo $_COOKIE["nom"]. ' ' . $_COOKIE["id"];
    

    if(isset($_COOKIE['nom'])&&isset($_COOKIE['id'])){
	  if(!empty($_COOKIE['nom'])&&!empty($_COOKIE['nom'])){
		  $nom = $_COOKIE["nom"];
      $id = $_COOKIE["id"];
      $sql = "SELECT Client FROM FC_grp1_Membres WHERE Client='".$nom."' AND Id='".$id."'";
      $result = db_request($sql);
      echo $result;
      while ($donnees = mysql_fetch_array($result) ){
	  echo $donnees[0];    
	  if($donnees[0] != NULL){
          $test = 1;
        }          
      }
	  }
	  echo '1';
	  echo $test;
  }
    	    $test = 0;

 */


    $test = verif();
    if ($test != 1){
      //L'utilisateur n'est pas log, on affiche donc la page de connexion
			include './view/connexion.php';
    }
    else{
      $sql = 'SELECT * FROM FC_grp1_Paniers ORDER BY Creneau';
      $result = db_request($sql);
      echo '<div id="nav-mid"><table id="table-jeux"><tr>';
      if($result == false){
	      echo "<p> Vous n'avez pas de réservation en cours</p>";
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
          echo '</table></div>';
          mysql_free_result($result);
    } 
?>
