<?php
    require('db_controller.php');
    require('connect.php');
    $verif = verif();
    if($verif != 1){
        //On renvoie l'utilisateur à la page de connexion
        header("location: ../view/connexion.php");
    }
    else{
      if(isset($_POST["jeux_res"])){
        
        //Var relative to the item withdraw
        $item_withdraw = $_POST['item'];
        $date = $_POST['date'];

        //Var relative to the user
        $nom = $_COOKIE['nom'];
        $id = $_COOKIE['id'];


          // Verifiy if the client basket is not full
          $sql='SELECT * FROM Paniers WHERE id='.$id.'';
          $result = db_request($sql);
          if(mysql_num_rows($result) >= 3){
            //Alert the user that he reach the limit of reservation
            echo '<script language="javascript">';
            echo 'alert("Votre panier est plein")';
            echo '</script>';
          }
          else{
            // Verifiy if the game is still available
            $sql='SELECT NbJeuxDispos FROM Jeux_Ludotheque WHERE Nom='.$item_withdraw.'';
            $result = db_request($sql);
            $number = mysql_fetch_array($reponse)
            if($number[0] == 0){
              //Alert the user that the games chosen is no longer available
              echo '<script language="javascript">';
              echo 'alert("Le jeu n\'est plus disponible")';
              echo '</script>';
            }
            else{
              // Insertion d'un jeux dans le panier du client
              $sql = 'INSERT INTO Paniers (id, nom, creneau) VALUES ('.$id.', '.$item_withdraw.', '.$date.')';
              $result = db_request($sql);
              if($result){
                $sql = 'UPDATE Jeux_Ludotheque SET NbJeuxDispos = NbJeuxDispos - 1 WHERE Nom='.$item_withdraw.'';
                $result = db_request($sql);
              }
            }
          }
    }
?>
