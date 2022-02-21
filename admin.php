<?php include ("header.html")?>
<?php
try

{
 // se connecter à mysql
    $db = new PDO('mysql:host=localhost;dbname=selection;charset=utf8', 'root', 'root'); 

}

catch (Exception $e)
  
{

        die('Erreur : ' . $e->getMessage());
 
}
// On récupère tout le contenu de la table comptes
$sqlQuery = 'SELECT * FROM comptes';
$comptesStatement = $db->prepare($sqlQuery);
$comptesStatement->execute();
$comptes = $comptesStatement->fetchAll();
?>

    <h2>Espace admin</h2>
    <nav>
        <div class="position">
		<a href="index.php">Retour acceuil</a>
        <a href="creation_compte.php">Créer un compte</a>
        </div>
    </nav>
    <br>
    <main>
		<h3>Liste des comptes</h3> 
        <section>
            <table>
                <tr>
                    <td>Type de compte</td>
                    <td>Identifiant</td>
                    <td>Mot de passe</td>
                </tr>
                <tr>
                    <td><?php
                    foreach ($comptes as $compte) {
                    ?>
                    <p><?php echo $compte['types_de_comptes']; ?></p>
                    <?php
                    }
                    ?></td>
                    <td><?php
                    foreach ($comptes as $compte) {
                    ?>
                    <p><?php echo $compte['login']; ?></p>
                    <?php
                    }
                    ?></td>
                    <td><?php
                    foreach ($comptes as $compte) {
                    ?>
                    <p><?php echo $compte['password']; ?></p>
                    <?php
                    }
                    ?></td>
                </tr>
               </td>
                </tr>
            </table>
        </section>
    </main>
<?php include ("footer.html")?>
