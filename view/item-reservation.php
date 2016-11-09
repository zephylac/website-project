<?php
$verif = verif();
if($verif != 1){
	//On renvoie l'utilisateur à la page de connexion
	header("location: redirect.php");
}
else{
	if(isset($_GET["jeux"])){
		//Var relative to the item withdraw
		$item_withdraw = $_GET['jeux'];
		$date = $_GET['date'];
		//Var relative to the user
		$nom = $_COOKIE['nom'];
		$id = $_COOKIE['id'];
		// Verifiy if the client basket is not full
		$sql="SELECT * FROM FC_grp1_Paniers WHERE Client='".$nom."'";
		$result = db_request($sql);
		if(mysql_num_rows($result) >= 3){
			//Alert the user that he reach the limit of reservation
            		echo '<script language="javascript">';
            		echo 'alert("Votre panier est plein")';
            		echo '</script>';
          	}
          	else{
            		// Verifiy if the game is still available
            		$sql="SELECT NbJeuxDispos FROM FC_grp1_JeuxLudotheque WHERE Nom='".$item_withdraw."'";
            		$result = db_request($sql);
	    		while ($donnees = mysql_fetch_array($result)){ 
				$value = $donnees[0];    
	    		}   
	        	if($value == 0){
              			//Alert the user that the games chosen is no longer available
              			echo '<script language="javascript">';
              			echo 'alert("Le '.$item_withdraw.' n\'est plus disponible")';
              			echo '</script>';
           		}
			else{
				// Insertion d'un jeux dans le panier du client
		    		$sql = "INSERT INTO FC_grp1_Paniers (Jeux, Client, Creneau) VALUES ('".$item_withdraw."', '".$nom."', '".$date."')";
              			$result = db_request($sql);
              			if($result){
                			$sql = "UPDATE FC_grp1_JeuxLudotheque SET NbJeuxDispos = NbJeuxDispos - 1 WHERE Nom='".$item_withdraw."'";
                			$result = db_request($sql);
					header("location = ./userpanel.php");
              			}
            		}
            	//
          	}
	}
}
?>
