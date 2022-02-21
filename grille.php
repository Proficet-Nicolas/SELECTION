<?php include ("header.html")?>
	<h2>Espace prof</h2>
    <nav>
		<a href="index.php">Retour acceuil</a>
		<a href="grille.php"><input type="button" value="Remplir une grille"/></a>
		<a href="grille.php"><input type="button" value="Modifier des grilles"/></a>
		<a href="classement.php"><input type="button" value="Voir le classement"/></a>
    </nav>
    <br>
    <main>
		<h3>Remplir une grille</h3>
        <section>
		<form method="post" action="grille_envoi.php">
				<div> 
					<span>Numéro de candidat :</span>
					<input type="text" name="numero_candidat" id="numero_candidat">	
				</div>
				<br>
				<div>
					<span>Nom :</span>
					<input type="text" name="nom" id="nom">
				</div>
				<br>
				<div>
					<span>Prénom :</span>
					<input type="text" name="prenom" id="prenom">
				</div>
				<br>
				<div>
					<label for="serie">Série :</label>
					<select name="serie" id="serie">
						<option value=""></option>
						<option value=12>ES/S (12)</option>
						<option value=10>STMG (10)</option>
						<option value=8>PRO (8)</option>
						<option value=9>L (9)</option>
						<option value=5>Autres (5)</option>   
				</select>
				</div>
				<br>
				<div>
					<span>Travail sérieux :</span>
					<input type="radio" id="tr_oui" name="travail_serieux" value=1
         checked>
         <label for="prof">oui(+1)</label>
		 <input type="radio" id="tr_non" name="travail_serieux" value=-1
         checked>
         <label for="prof">non(-1)</label>
				</div>	
				<br>
				<div>
					<span>Absence :</span>
					<input type="radio" id="absence_oui" name="absence" value=-2
         checked>
         <label for="prof">oui(-2 ou dossier refusé)</label>
		 			<input type="radio" id="absence_non" name="absence" value=0
         checked>
         <label for="prof">non(+0)</label>
				</div>
				<br>
				<div>		
					<span>Attitude / Comportement :</span>
					<input type="radio" id="ac_oui" name="comportement" value=0
         checked>
         <label for="prof">oui(dossier refusé)</label>
		 			<input type="radio" id="ac_non" name="comportement" value=1
         checked>
         <label for="prof">non(+1)</label>
				</div>
				<br>
				<div>
					<span>Étude supérieur :</span>
					<input type="radio" id="es_oui" name="etude_sup" value=0
         checked>
         <label for="prof">oui(+1)</label>
		 			<input type="radio" id="es_non" name="etude_sup" value=0
         checked>
         <label for="prof">non(+0)</label>	
				</div>
				<br>
				<div>
					<span>Avis PP :</span>
					<input type="radio" id="app_b" name="avis_pp" value=2
         checked>
         <label for="prof">B(+2)</label>
		 			<input type="radio" id="app_ab" name="avis_pp" value=1
         checked>
         <label for="prof">AB(+1)</label>
		 			<input type="radio" id="app_in" name="avis_pp" value=0
         checked>
         <label for="prof">Insuf.(+0)</label>
		 			<input type="radio" id="app_neg" name="avis_pp" value=-2
         checked>
         <label for="prof">Négatif(-2)</label>
				</div>
				<br>
				<div>
					<span>Avis Proviseur :</span>
					<input type="radio" id="ap_b" name="avis_proviseur" value=2
         checked>
         <label for="prof">B(+2)</label>
		 			<input type="radio" id="ap_ab" name="avis_proviseur" value=1
         checked>
         <label for="prof">AB(+1)</label>
		 			<input type="radio" id="ap_in" name="avis_proviseur" value=0
         checked>
         <label for="prof">Insuf.(+0)</label>
		 			<input type="radio" id="ap_neg" name="avis_proviseur" value=-2
         checked>
         <label for="prof">Négatif(-2)</label>
				</div>
				<br>
				<div>
					<span>Lettre de motivation :</span>
					<input type="radio" id="lm_b" name="lettre_motivation" value=2
         checked>
         <label for="prof">B(+2)</label>
		 			<input type="radio" id="lm_ab" name="lettre_motivation" value=1
         checked>
         <label for="prof">AB(+1)</label>
		 			<input type="radio" id="lm_in" name="lettre_motivation" value=0
         checked>
         <label for="prof">Insuf.(+0)</label>
		 			<input type="radio" id="lm_neg" name="lettre_motivation" value=-2
         checked>
         <label for="prof">Négatif(-2)</label>
				</div>
				<br>
				<div>
					<span>Remarques :</span>
					<br>
					<textarea rows = 10 cols="65" name="remarques"></textarea>	
				</div>
				<br>
				<div>
					<span>Note du jury pour ce dossier (sur 20) :</span>
					<br>
					<input type="text" name="note_jury">
				</div>
				<br>
				<input type="submit" value="valider">				

			</form>
        </section>
    </main>
<?php include ("footer.html")?>
