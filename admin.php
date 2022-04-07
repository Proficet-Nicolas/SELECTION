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
                    <td>id_comptes</td>
                    <td>Type de compte</td>
                    <td>Identifiant</td>
                    <td>Mot de passe</td>
                    <td>code_comptes</td>
                    <td>Modifier</td>
                    <td>Supprimer</td>
                </tr>
                <tr>
				<?php
                    foreach ($comptes as $compte) :
                    ?><tr>
                    <td>
                    <p><?php echo $compte['id_comptes']; ?></p>
                     </td>
                    <td>
                    <p><?php echo $compte['types_de_comptes']; ?></p>
                     </td>
                    <td>
                    <p><?php echo $compte['login']; ?></p>
                     </td>
                    <td>
                    <p><?php echo $compte['password']; ?></p>
                     </td>
                     <td>
                    <p><?php echo $compte['code_comptes']; ?></p>
                     </td>
                    <td>
					<a href="modif_compte.php?id=<?php echo($grille['id_grille']); ?>">Modifier</a>
                    </td>
                    <td>
					<a href="delete_compte.php?id=<?php echo($grille['id_grille']); ?>">Supprimer</a>
                    </td>   
                    </tr>
					<?php endforeach; ?> 
                </tr>
               </td>
                </tr>
            </table>
        </section>
    </main>
<?php include ("footer.html")?>
