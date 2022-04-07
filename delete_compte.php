<?php include ("header.html")?>
<?php $getData = $_GET;?>
<form action="delete_compteconfirm.php" method="post">
<div>
    <span>Code du compte</span>
    <br>
    <input type="text" name="code_comptes" id="code_comptes">
    <br>
    <input type="submit" value="envoyer" />
</div>
</form>