<?php include ("header.html")?>
<?php $getData = $_GET;?>
<form action="delete_confirm.php" method="post">
<div>
    <span>Code de la grille</span>
    <br>
    <input type="text" name="code_grille" id="code_grille">
    <br>
    <input type="submit" value="envoyer" />
</div>
</form>