<?php
    require('db_controller.php');
    if(!isset($_SESSION)){
            
            session_start(); // Ouverture la session si elle n'est pas ouverte
    }
    

    //Var relative to the item withdraw
    $item_withdraw = $_POST['item'];
    $date = $_POST['date'];
    
    //Var relative to the user
    $nom = $_SESSION['nom'];
    $id = $_SESSION['id];

      
      // Verifiy if the client basket is not full
      $sql='SELECT * FROM Paniers WHERE id='.$id.'';
      $result = db_request($sql);
      if(mysql_num_rows($result) >= 3){
        //Alert the user that he reach the limit of reservation
      }
      // Verifiy if the game is still available
      $sql="SELECT 'NbJeuxDispos' FROM Jeux_Ludotheque  WHERE `Nom`='.$item_withdraw.';
      $result = db_request($sql);
      $number = mysql_fetch_array($reponse)
      if($number[0] == 0){
        //Alert the user that the games chosen is no longer available
      }
      
      // Insertion d'un jeux dans le panier du client
      $sql = "INSERT INTO Paniers (id, nom, creneau) VALUES ('$id', '$item_withdraw', '$date')";
      $result = db_request($sql);
      if($result){
        $sql = "UPDATE Jeux_Ludotheque SET NbJeuxDispos = NbJeuxDispos - 1 WHERE Nom='$item_withdraw'";
        $result = db_request($sql);
      }
?>
