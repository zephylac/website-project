<?php
require('db_controller.php');
function verif(){
  if(isset($_COOKIE['nom'])&&isset($_COOKIE['id']){
	  if(!empty($_COOKIE['nom'])&&!empty($_COOKIE['nom'])){
		  $nom = $_COOKIE["nom"];
      $id = $_COOKIE["id"];
      $sql = 'SELECT Nom FROM ... WHERE Nom='.$nom.' AND id='.$id'';
      $result = db_request($sql);
      while ($donnees = mysql_fetch_array($result) ){
        if($donnees[0] != NULL){
          return 1;
        }          
      }
    }	
  }
  return 0;
}   
?>
