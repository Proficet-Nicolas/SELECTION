 <header>
        <h1>Selection BTS</h1>
    </header>

<?php
$varID = $_POST["ID"];
$varpassw = $_POST["passw"];
if ($varID=="prof" AND $varpassw=="prof123") {
    ?>
    <a href="prof.php">Code bon, cliquez.</a>
    <?php
    }
else if ($varID=="admin" AND $varpassw=="admin123") {
    ?>
    <a href="admin.php">Code bon, cliquez.</a>
    <?php
    }
else if ($varID=="secretaire" AND $varpassw=="secretaire123") {
    ?>
    <a href="secretaire.php">Code bon, cliquez.</a>
    <?php
    }
else {
    ?>
    <a href="index.php">Code incorrect, cliquez.</a>
    <?php
    }
?>
	
		