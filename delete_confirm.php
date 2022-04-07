<?php
// récupérer les valeurs
$id_grille = isset($_POST['id_grille']) ?  $_POST['id_grille'] : ""; 
$code_grille = isset($_POST['code_grille']) ?  $_POST['code_grille'] : "";

try

{
 // se connecter à mysql
    $pdoConnect = new PDO('mysql:host=localhost;dbname=selection;charset=utf8;port=3305', 'phpmyadmin', 'student'); 

}

catch (Exception $e)
  
{

        die('Erreur : ' . $e->getMessage());
 
}

$query = "DELETE FROM `grille` WHERE  `code_grille` = :code_grille";
$pdoResult = $pdoConnect->prepare($query);

$pdoExec = $pdoResult->execute(array(":code_grille"=>$code_grille));

if($pdoExec)
{
	echo 'Données supprimer';
}else{
	echo 'ERROR Données non supprimer';
}

?>
<a href="prof.php">Retour</a>
