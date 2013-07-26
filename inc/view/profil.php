<div class="link_profil">
	<ul>
		<li><button type="button" onclick="profil_html('gestion')">Gestion du compte</button></li>
		<li><button type="button" onclick="profil_html('message')">Messagerie</button></li>		
		<li><button type="button" onclick="profil_html('photo')">Mes photos</button></li>
	</ul>	
</div>

<div id="gestion">
	<h1>Gestion de votre compte</h1>

	<form method="POST" action="index.php?page=profil">
		<fieldset>
			<legend>Mot de passe</legend>
		<label for="old_pass">Mot de passe :</label><input type="password" id="old_pass" name="old_pass" placeholder="Mot de passe"><br>
		<label for="new_pass">Nouveau mot de passe :</label><input type="password" id="new_pass" name="new_pass" placeholder="Nouveau mot de passe"><br>
		<label for="verfi_pass">Confirmer mot de passe :</label><input type="password" id="verif_pass" name="verif_pass" placeholder="Confirmer votre mot de passe"><br>
		<input type="submit" class="sub" name="btn_mdp" value="Changer">
		</fieldset>
		<hr>
		<fieldset>
			<legend>Email</legend>
		<label for="new_mail">Nouvel Email :</label><input type="text" id="new_mail" name="new_mail" placeholder="<?php echo $email; ?>"><br>
		<input type="submit" class="sub" name="btn_email" value="Changer">
		</fieldset>
		<hr>
		<fieldset>
			<legend>Pseudo</legend>
		<label for="new_pseudo">Nouveau Pseudo :</label><input type="text" id="new_pseudo" name="new_pseudo" placeholder="<?php echo $pseudo; ?>"><br>
		<input type="submit" class="sub" name="btn_pseudo" value="Changer">
		</fieldset>
		<hr>
		<fieldset>
			<legend>Ville / D&eacute;partement</legend>
		<label for="new_city">Ville :</label><input type="text" id="new_city" name="new_city" placeholder="<?php echo $city; ?>"><br>
		<label for="new_depart">D&eacute;partement :</label>
			<select name="new_depart" id="new_depart">
				<option>Choisissez un d&eacute;partement</option>
			<?php
				foreach ($depts as $key => $value)
				{
					?>
					<option><?php echo $value; ?></option>
					<?php
				}
			?>
			</select>
		<input type="submit" class="sub" name="btn_city" value="Changer">
		</fieldset>
		<hr>
		<fieldset>
			<legend>Suppression du compte</legend>
		<label for="sup">Voulez-vous supprimer votre compte ?</label><br>
		<input onclick="return verifsupp()" type="submit" class="sub" name="btn_sup" value="OK">
		</fieldset>


	</form>
</div>
<div id="message">
	<h1>Messagerie</h1>
	<div id="list_conv">
		<?php echo $conversation; ?>
	</div>
</div>
<div id="photo">
	<h1>Photos de <?php echo $userinfo['pseudo']; ?></h1>

	<?php echo $list_photo; ?>

</div>
<div id="info">
	<h1>Votre profil</h1>
		<div class="info_profil">
			<div class="img_sex_profil">
				<img src="img/<?php echo $type_img; ?>.png" alt="sex">
			</div>
			<div class="legend_profil">
				<?php echo $tableau; ?>
			</div>
		</div>
</div>

