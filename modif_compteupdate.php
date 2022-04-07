<?php

$id_comptes = isset($_POST['id_comptes']) ? $_POST['id_comptes'] : "";
$types_de_comptes = isset($_POST['types_de_comptes']) ? $_POST['types_de_comptes'] : "";
$login = isset($_POST['login']) ? $_POST['login'] : "";
$password = isset($_POST['password']) ?  $_POST['password'] : "";

try

{
 // se connecter à mysql
    $pdoConnect = new PDO('mysql:host=localhost;dbname=selection;charset=utf8;port=3305', 'phpmyadmin', 'student'); 

}

catch (Exception $e)
  
{

        die('Erreur : ' . $e->getMessage());
 
};

$query = "UPDATE `comptes` SET `id_comptes`=:id_comptes,`types_de_comptes`= :types_de_comptes,`login`= :login,`password`=:password WHERE `id_comptes` = :id_comptes";

$pdoResult = $pdoConnect->prepare($query);

$pdoExec = $pdoResult->execute(array(":id_comptes"=>$id_comptes,":types_de_comptes"=>$types_de_comptes,":login"=>$login,":password"=>$password,));

if($pdoExec)
{
	echo 'Comptes mise à jour';
}else{
	echo 'ERROR Comptes non mise à jour';
}

?>
<a href="admin.php">Retour</a>
?>