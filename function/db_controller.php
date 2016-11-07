<?php
//@param
//sql which is the request send to the database
function db_request($sql){
  //Connexion à la base de données
  //init var
  $db="nom-base";
  $server="nom-serveur";
  $user="nom-utilisateur";
  $pw="pwd";
  //Create link 
  $linktodb = mysql_connect($server,$user,$pw);
  //Connect to the databse
  $return = mysql_select_db($db,$linktodb);
  
  //Display error message
  if(!$return){
    echo "Connexion à la base impossible";
  }
  
  $response = mysql_query($sql);
  
  //Closing Mysql connection
  mysql_close($db);
  
  return $response;
}
//function which verify if the cookies are right
function verif(){
  if(isset($_COOKIE['nom'])&&isset($_COOKIE['id'])){
	  if(!empty($_COOKIE['nom'])&&!empty($_COOKIE['nom'])){
		  $nom = $_COOKIE["nom"];
      $id = $_COOKIE["id"];
      $sql = "SELECT Client FROM FC_grp1_Membres WHERE Client='".$nom."' AND Id='".$id."'";
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
