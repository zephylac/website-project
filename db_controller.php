<? php

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
  mysqli_close($db);
  
  return $response;
}
?>
