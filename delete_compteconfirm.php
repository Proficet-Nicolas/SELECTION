<?php
// récupérer les valeurs
$id_comptes = isset($_POST['id_comptes']) ?  $_POST['id_comptes'] : ""; 
$code_comptes = isset($_POST['code_comptes']) ?  $_POST['code_comptes'] : "";

try

{
 // se connecter à mysql
    $pdoConnect = new PDO('mysql:host=localhost;dbname=selection;charset=utf8;port=3305', 'phpmyadmin', 'student'); 

}

catch (Exception $e)
  
{

        die('Erreur : ' . $e->getMessage());
 
}

$query = "DELETE FROM `comptes` WHERE  `code_comptes` = :code_comptes";
$pdoResult = $pdoConnect->prepare($query);

$pdoExec = $pdoResult->execute(array(":code_comptes"=>$code_comptes));

if($pdoExec)
{
	echo 'Compte supprimer';
}else{
	echo 'ERROR Compte non supprimer';
}

?>
<a href="admin.php">Retour</a>