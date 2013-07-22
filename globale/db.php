<?php
/**
* [Gestion de la SQL, seulement des fonctions ici]
*/

// Connexion à la base

if($bdd = mysqli_connect($sql_host, $sql_user, $sql_pass, $sql_db)) {
}
else {
	echo "Impossible de se connecter a la base de donnees";
	exit;

}
if (!mysqli_set_charset($bdd, "utf8")) {
    printf("Erreur lors du chargement du jeu de caractères utf8 : %s\n", mysqli_error($bdd));
    exit;
}

function bddclose($bdd) {
	mysqli_close($bdd);
	return;
}

function pseudo_dispo($bdd, $pseudo)
{
	$req = mysqli_query($bdd, "SELECT pseudo FROM users");
	if ( $req != false )
	{
		if (mysqli_num_rows($req) > 0 )
		{
				while($check = mysqli_fetch_assoc($req))
				{
					$checked[] = $check;
				}
				foreach ($checked as $value)
				{
					if ( strtolower($value['pseudo']) == strtolower($pseudo) )
					{
						return true;
					}
				}
				return false;
		}
		return false;
	}
	else
	{
		return false;
	}
}

function delPROFIL($bdd, $id_user)
{
	$req = mysqli_query($bdd, "DELETE FROM users WHERE id_user = $id_user");
	$req2 = mysqli_query($bdd, "DELETE FROM message WHERE id_sender = $id_user OR id_receiver = $id_user ");
}

function getUserinfos($bdd, $id)
{
	$req = mysqli_query($bdd, "SELECT * FROM users WHERE id_user = $id");
	$usersinfo = mysqli_fetch_assoc($req);
	return $usersinfo;
}

function id_exist($bdd, $id)
{
	$req = mysqli_query($bdd, "SELECT id_user FROM users");
	if ($req != false )
	{
		if ( mysqli_num_rows($req) > 0 )
			{
				while($check = mysqli_fetch_assoc($req))
				{
					$checked[] = $check;
				}
				foreach ($checked as $value)
				{
					if ( strtolower($value['id_user']) == $id )
					{
						return true;
					}
				}
				return false;
			}
			return false;
	}
	else
	{
		return false;
	}
}

function getNAME($bdd, $id)
{
	$req = mysqli_query($bdd, "SELECT pseudo FROM users WHERE id_user = $id ");
	if ($req != false )
	{
		if ( mysqli_num_rows($req) > 0 )
			{
				$check = mysqli_fetch_assoc($req);
				return $check['pseudo'];
			}
			return false;
	}
	else
	{
		return false;
	}
}
