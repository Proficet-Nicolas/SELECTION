<?php
// récupérer les valeurs 
$id_comptes = isset($_POST['id_comptes']) ? $_POST['id_comptes'] : '';
$types_de_comptes = isset($_POST['types_de_comptes']) ? $_POST['types_de_comptes'] : "";
$login = isset($_POST['login']) ? $_POST['login'] : "";
$password = isset($_POST['password']) ?  $_POST['password'] : "";

try

{
 // se connecter à mysql
    $db = new PDO('mysql:host=localhost;dbname=selection;charset=utf8', 'root', 'root'); 

}

catch (Exception $e)
  
{

        die('Erreur : ' . $e->getMessage());
 
};

 // Requête mysql pour insérer des données
 $sql = "INSERT INTO `comptes`(`login`, `password`, `types_de_comptes`) VALUES (:login,:password,:types_de_comptes)";
 $res = $db->prepare($sql);
 $exec = $res->execute(array(":login"=>$login,":password"=>$password,":types_de_comptes"=>$types_de_comptes));
 // vérifier si la requête d'insertion a réussi
 if($exec){ ; 
   echo 'Données insérées';
 }else{
   echo "Échec de l'opération d'insertion";
 }
?> 
  
      