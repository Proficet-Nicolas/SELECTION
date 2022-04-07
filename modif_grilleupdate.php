<?php


$numero_candidat = isset($_POST['numero_candidat']) ? $_POST['numero_candidat'] : "";
$nom = isset($_POST['nom']) ? $_POST['nom'] : "";
$prenom = isset($_POST['prenom']) ?  $_POST['prenom'] : "";
$serie = isset($_POST['serie']) ?  $_POST['serie'] : "";
$travail_serieux = isset($_POST['travail_serieux']) ?  $_POST['travail_serieux'] : "";
$absence = isset($_POST['absence']) ?  $_POST['absence'] : "";
$comportement = isset($_POST['comportement']) ?  $_POST['comportement'] : "";
$etude_sup = isset($_POST['etude_sup']) ?  $_POST['etude_sup'] : "";
$avis_pp = isset($_POST['avis_pp']) ?  $_POST['avis_pp'] : "";
$avis_proviseur = isset($_POST['avis_proviseur']) ?  $_POST['avis_proviseur'] : "";
$lettre_motivation = isset($_POST['lettre_motivation']) ?  $_POST['lettre_motivation'] : "";
$remarques = isset($_POST['remarques']) ?  $_POST['remarques'] : "";
$note_jury = isset($_POST['note_jury']) ?  $_POST['note_jury'] : "";

try

{
 // se connecter à mysql
    $pdoConnect = new PDO('mysql:host=localhost;dbname=selection;charset=utf8;port=3305', 'phpmyadmin', 'student'); 

}

catch (Exception $e)
  
{

        die('Erreur : ' . $e->getMessage());
 
};


$query = "UPDATE `grille` SET `numero_candidat`=:numero_candidat,`nom`=:nom,`prenom`=:prenom,`serie`=:serie,`travail_serieux`=:travail_serieux,`absence`=:absence,`comportement`=:comportement,`etude_sup`=:etude_sup,`avis_pp`=:avis_pp,`avis_proviseur`=:avis_proviseur,`lettre_motivation`=:lettre_motivation,`remarques`=:remarques,`note_jury`=:note_jury WHERE `numero_candidat` = :numero_candidat";

$pdoResult = $pdoConnect->prepare($query);

$pdoExec = $pdoResult->execute(array(":numero_candidat"=>$numero_candidat,":nom"=>$nom,":prenom"=>$prenom,":serie"=>$serie,":travail_serieux"=>$travail_serieux,":absence"=>$absence,":comportement"=>$comportement,":etude_sup"=>$etude_sup,":avis_pp"=>$avis_pp,":avis_proviseur"=>$avis_proviseur,":lettre_motivation"=>$lettre_motivation,":remarques"=>$remarques,":note_jury"=>$note_jury,));

if($pdoExec)
{
	echo 'Données mise à jour';
}else{
	echo 'ERROR Données non mise à jour';
}

?>
<a href="prof.php">Retour</a>