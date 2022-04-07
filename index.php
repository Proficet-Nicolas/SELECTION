<?php include ("header.html")?>
    <h2>Acceuil</h2>
    <p>prof:ID=prof mdp=prof123</p>
    <p>admin:ID=admin mdp=admin123</p>
    <p>secretaire:ID=secretaire mdp=secretaire123</p>
    <nav>
        <a href="index.php">Retour acceuil</a>
    </nav>
    <br>
    <main>
        <section class="login">
            <form action="home.php" method="post">
            <div>
                <span>Identifiant</span>
                <br>
                <input type="text" name="ID">
            </div>
            <br>
            <div>
                <span>Mot de passe</span>
                <br>
                <input type="password" name="passw">
            </div>
            <br>
            <input type="submit" value="envoyer" />
            </form>
            <br>
            <div>
              
            </div>
        </section>
    </main>
<?php include ("footer.html")?>
