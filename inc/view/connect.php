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
				<h1>My meetic</h1>
				<div class="logs">
					<h2>Bienvenue</h2>
					<p>My meetic est un site de rencontre pour la Web@cademie.</p>
					<p>Inscrivez-vous et faites des rencontres inoubliables !</p>
					<input type="button" onclick="ins('inscription')" id="tog" class="btn" value="S'inscrire">
					<div id="inscription" style="display:none;">
						<form method="POST">
							<fieldset>
    						<legend>Inscription :</legend>
									<label for="pseudo_in">Pseudo :</label>
									<input type="text" name="pseudo_in" id="pseudo_in" required></li>

									<label for="nom_in">Nom :</label>
									<input type="text" name="nom_in" id="nom_in" required></li>

									<label for="prenom_in">Pr&eacute;nom :</label>
									<input type="text" name="prenom_in" id="prenom_in" required></li>

									<label for="date_n_in">Date de naissance :</label>
									<input type="date" name="date_n_in" id="date_n_in" placeholder="mm-dd-yyyy" required></li>

									<label for="pass">Mot de passe :</label>
									<input type="password" name="pass" id="pass" placeholder="Au moins 6 caract&egrave;res" required></li>

									<label for="sex_in">Sexe :</label>
										<select name="sex" id="sex-m">
											<option value="Masculin">&#9794;</option>
											<option value="Masculin">&#9792;</option>
										</select>
									<label for="email_in">Email :</label>
										<input type="text" name="email_in" id="email_in" placeholder="Votre Email" required></li>
									<label for="ville_in">Ville :</label>
										<input type="text" name="ville_in" id="ville_in" placeholder="Votre ville" required></li>
								<input class="btn" type="submit" name="ok_in" value="Envoyer">
							</fieldset>
						</form>
					</div>
					<h2>D&eacute;j&agrave; inscrit ?</h2>
					<form method="POST">
						<label for="pseudo">Pseudo</label><input name="pseudo" type="text" id="pseudo">
						<label for="mdp">Mot de passe</label><input name="mdp" type="password" id="mdp">
						<input class="btn" type="submit" name="login" value="OK">
					</from>
				</div>
		</div>
	<script type="text/javascript">blinkimg('blink');</script>
	</body>
</html>