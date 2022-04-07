<?php include ("header.html")?>

<h2>Création de compte</h2>
  <form method="post" action="modif_compteupdate.php">

<div class="compte">
<input type="text" id="id_comptes" name="id_comptes">id_comptes</input> <br>
<input type="text" id="login" name="login">login</input> <br>
<input type="text" id="password" name="password">mot de passe</input> <br>
<input type="radio" id="prof" name="types_de_comptes" value="prof"
         checked>
         <label for="prof">prof</label>
<input type="radio" id="secretaire" name="types_de_comptes" value="secretaire"
         checked>
         <label for="secretaire">secretaire</label>
<input type="radio" id="admin" name="types_de_comptes" value="admin"
         checked>
         <label for="admin">admin</label>
</div>

<input type="submit" value="Créer">  
    </form> 
    <a href="index.php">Retour acceuil</a>
<?php include ("footer.html")?>