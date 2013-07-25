<h1>Quel profil cherchez-vous ?</h1>
<div class="reright">
	<?php echo $list_recherche; ?>
</div>
<div class="link_profil">	
	<ul>
		<li><button type="button" onclick="switch_li('rencontre_pseudo')">Recherche par Pseudo</button></li>
	</ul>
		<div id="rencontre_pseudo">
			<form method="POST" action="index.php?page=recherche">
				<fieldset>
					<legend>Recherche par Pseudo</legend>
						<input type="text" placeholder="Entrez un pseudo" name="recherche_pseudo">
						<div id="checkbox_pseudo">
							<input type="checkbox" name="exact">Pseudo exact
						</div>
						<input class="sub" type="submit" name="btn_recherche_pseudo" value="Rechercher">
				</fieldset>
			</form>
		</div>

	<ul>
		<li><button type="button" onclick="switch_li('recherche_avancee')">Recherche avanc&eacute;e</button></li>
	</ul>
	<div id="recherche_avancee">
		<form method="POST" action="index.php?page=recherche">
			<fieldset>
				<legend>Recherche de profil avanc&eacute;</legend>
					<legend>&Acirc;ge</legend>
						<select id="age" name="recherche_age">
							<option>Choisissez une tranche d'&acirc;ge</option>
							<option>moins de 18 ans</option>
							<option>18-25 ans</option>
							<option>25-35 ans</option>
							<option>35-50 ans</option>
							<option>plus de 50</option>
						</select>
					<legend>Ville</legend>
						<select onclick="addcheck(this.value)" onkeyup="addcheck(this.value)" onchange="addcheck(this.value)" id="ville" name="recherche_ville">
							<option>Choisissez une ville</option>
							<?php echo $listcity; ?>
						</select>
					<div id="checkbox">
					</div>
					<legend>Sexe</legend>
						<select id="sex" name="recherche_sex">
							<option>Choisissez un sexe</option>
							<option>Homme</option>
							<option>Femme</option>
						</select>
					<legend>Photo</legend>
						<select id="phot" name="recherche_photo">
							<option>Choisissez une option</option>
							<option>Avec photo</option>
							<option>Sans photo</option>
							<option>Avec et sans photo</option>
						</select>
					<legend>D&eacute;partement</legend>
						<select id="depart" name="recherche_depart">
							<option>Choisissez une option</option>
							<?php echo $listdepart; ?>
						</select>
					<input class="sub" type="submit" name="btn_recherche_av" value="Rechercher">
			</fieldset>
		</form>
	</div>
</div>