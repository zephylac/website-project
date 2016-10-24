require_once('db_controller.php');
<?php
if(isset($_POST["connect"])){
	if(!empty($_POST["nom"])&&!empty($_POST["id"])){
		$nom = $_POST["nom"];
		$id = $_POST["id"];
    $sql = 'SELECT `Nom` FROM ... WHERE `nom`=$nom AND `id`=$id';
    $result = db_request($sql);
    mysql_fetch_array($result);
    
?>
