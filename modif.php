<?php include ("header.html")?>
<?php
// récupérer les valeurs 
$id_grilles = isset($_POST['id_grille']) ? $_POST['id_grille'] : '';
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
$code_grille = isset($_POST['code_grille']) ?  $_POST['code_grille'] : "";

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
$sqlQuery = 'SELECT * FROM grille';
$grillesStatement = $db->prepare($sqlQuery);
$grillesStatement->execute();
$grilles = $grillesStatement->fetchAll();
?>
	<h2>Espace prof</h2>
    <nav>
		<a href="index.php">Retour acceuil</a>
		<a href="grille.php"><input type="button" value="Remplir une grille"/></a>
		<a href="grille.php"><input type="button" value="Modifier des grilles"/></a>
		<a href="classement.php"><input type="button" value="Voir le classement"/></a>
    </nav>
    <br>
    <main>
		<h3>Classement</h3>
        <section>
            <table>
                <tr>
                    <th>Numéro de candidat</th>
                    <th>Nom</th>
                    <th>Prénom</th>
                    <th>Note</th>
                    <th>Code de la grille</th>
                    <th>Modifier</th>
                    <th>Supprimer</th>
                </tr>
                <tr>
				<?php
                    foreach ($grilles as $grille) :
                    ?><tr>
                    <td>
                    <p><?php echo $grille['numero_candidat']; ?></p>
                     </td>
                    <td>
                    <p><?php echo $grille['nom']; ?></p>
                     </td>
                    <td>
                    <p><?php echo $grille['prenom']; ?></p>
                     </td>
                    <td>
                    <p><?php echo $grille['note_jury']; ?></p>
                     </td>
                     <td>
                    <p><?php echo $grille['code_grille']; ?></p>
                     </td>
                    <td>
					<a href="modif_grille.php?id=<?php echo($grille['id_grille']); ?>">Modifier</a>
                    </td>
                    <td>
					<a href="delete.php?id=<?php echo($grille['id_grille']); ?>">Supprimer</a>
                    </td>   
                    </tr>
					<?php endforeach; ?> 
                </tr>
            </table>
        </section>
    </main>
</body>
</html>