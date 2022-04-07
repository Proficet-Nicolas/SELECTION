<?php include ("header.html")?>
<?php
try

{
 // se connecter à mysql
    $db = new PDO('mysql:host=localhost;dbname=selection;charset=utf8;port=3305', 'phpmyadmin', 'student'); 

}

catch (Exception $e)
  
{

        die('Erreur : ' . $e->getMessage());
 
}
// On récupère tout le contenu de la table comptes
$sqlQuery = 'SELECT * FROM grilles';
$grillesStatement = $db->prepare($sqlQuery);
$grillesStatement->execute();
$grilles = $grillesStatement->fetchAll();
?>

<h2>Espace secrétaire</h2>
    <nav>
		<a href="index.php">Retour acceuil</a>
		<a href="classement_secretaire.php"><input type="button" value="Voir le classement"/></a>
    </nav>
    <br>
    <main>
		<h3>Classement</h3>
        <section>
            <table>
                <tr>
                    <td>Numéro de candidat</td>
                    <td>Nom</td>
                    <td>Prénom</td>
                    <td>Note</td>
                </tr>
                <tr>
                <td><?php
                    foreach ($grilles as $grille) {
                    ?>
                    <p><?php echo $grille['numero_candidat']; ?></p>
                    <?php
                    }
                    ?> </td>
                    <td><?php
                    foreach ($grilles as $grille) {
                    ?>
                    <p><?php echo $grille['nom']; ?></p>
                    <?php
                    }
                    ?> </td>
                    <td><?php
                    foreach ($grilles as $grille) {
                    ?>
                    <p><?php echo $grille['prenom']; ?></p>
                    <?php
                    }
                    ?> </td>
                    <td><?php
                    foreach ($grilles as $grille) {
                    ?>
                    <p><?php echo $grille['note_jury']; ?></p>
                    <?php
                    }
                    ?> </td>
                </tr>
            </table>
        </section>
    </main>
<?php include ("footer.html")?>
