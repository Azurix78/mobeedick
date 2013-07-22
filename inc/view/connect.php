<!DOCTYPE html>
<html>
	<head>
		<title>Connexion My Meetic</title>
		<meta name="author" content="rubio_n">
		<meta charset="utf-8" />
		<link rel="icon" type="image/x-icon" href="img/favicon.ico" />
		<link rel="stylesheet" href="css/connect.css" />
		<script type="text/javascript" src="js/js.js"></script>
		
	</head>
	<body>
		<div class="container">
			<div class="left_container">
				<h1>My meetic</h1>
			</div>
			<img src="img/coeurrose.png" style="visibility:hidden;width:303px;margin-top:250px;" id="blink">
			<div class="right_container">
				<div class="logs">
					<h1>Bienvenue</h1>
					<p>My meetic est un site de rencontre pour la Web@cademie.</p>
					<p>Inscrivez-vous et faites des rencontres inoubliables !</p>
					<input type="button" onclick="ins('inscription')" id="tog" class="btn" value="S'inscrire">
					<div id="inscription" style="display:none;">
						<form method="POST">
							<fieldset>
    						<legend>Inscription :</legend>
								<table>
									<tr>
										<td><label for="pseudo_in">Pseudo :</label></td>
										<td><input type="text" name="pseudo_in" id="pseudo_in" required></li></td>
									</tr>
									<tr>
										<td><label for="nom_in">Nom :</label></td>
										<td><input type="text" name="nom_in" id="nom_in" required></li></td>
									</tr>
									<tr>
										<td><label for="prenom_in">Pr&eacute;nom :</label></td>
										<td><input type="text" name="prenom_in" id="prenom_in" required></li></td>
									</tr>
									<tr>
										<td><label for="date_n_in">Date de naissance :</label></td>
										<td><input type="date" name="date_n_in" id="date_n_in" placeholder="mm-dd-yyyy" required></li></td>
									</tr>
									<tr>
										<td><label for="pass">Mot de passe :</label></td>
										<td><input type="password" name="pass" id="pass" placeholder="Au moins 6 caract&egrave;res" required></li></td>
									</tr>
									<tr>
										<td><label for="sex_in">Sexe :</label></td>
										<td>
											<input type="radio" name="sex" id="sex-m" value="Masculin"><label for="sex-m" required>&#9794;</label>
											<input type="radio" name="sex" id="sex-f" value="Feminin"><label for="sex-f" required>&#9792;</label>
										</td>
									</tr>
									<tr>
										<td><label for="email_in">Email :</label></td>
										<td><input type="text" name="email_in" id="email_in" placeholder="Votre Email" required></li></td>
									</tr>
									<tr>
										<td><label for="ville_in">Ville :</label></td>
										<td><input type="text" name="ville_in" id="ville_in" placeholder="Votre ville" required></li></td>
									</tr>
								</table>
								<input class="btn" type="submit" name="ok_in" value="Envoyer">
							</fieldset>
						</form>
					</div>
					<h1>D&eacute;j&agrave; inscrit ?</h1>
					<form method="POST">
						<label for="pseudo">Pseudo</label><input name="pseudo" type="text" id="pseudo">
						<label for="mdp">Mot de passe</label><input name="mdp" type="password" id="mdp">
						<input class="btn" type="submit" name="login" value="OK">
					</from>
				</div>
			</div>
		</div>
		<script type="text/javascript">blinkimg('blink');</script>
	</body>
</html>