<?php
require_once 'inc/model/user.php';

if ( isset($_GET['id']) )
{
	if ( $_GET['id'] != $_SESSION['id'] )
	{
		$userinfo = getUserinfos($bdd, $id);	
	}
	else
	{
		header('location:index.php?page=profil');
	}
	
}
else
{
	header('location:index.php?page=profil');
}

$pseudo = $userinfo['pseudo'];
$nom = $userinfo['nom'];
$prenom = $userinfo['prenom'];
$city = $userinfo['city'];
$age = getAge($userinfo['birthdate']);
$email = $userinfo['email'];
$sex = $userinfo['sex'];
$id = $_GET['id'];
$depart = $userinfo['depart'];


if ($sex == "m")
{
	$type_img = "male";
}
else
{
	$type_img = "female";
}


ob_start();
?>
<table>

	<tr>
		<th>Pseudo</th>
		<td><?php echo xmldecode(xmlentities($pseudo)); ?></td>
	</tr>
	<tr>
		<th>Nom</th>
		<td><?php echo xmldecode(xmlentities($nom)); ?></td>
	</tr>
	<tr>
		<th>Pr&eacute;nom</th>
		<td><?php echo xmldecode(xmlentities($prenom)); ?></td>
	</tr>
	<tr>
		<th>Ville</th>
		<td><?php echo xmldecode(xmlentities($city)); ?></td>
	</tr>
	<tr>
		<th>D&eacute;par.</th>
		<td><?php echo xmldecode(xmlentities($depart)); ?></td>
	</tr>
	<tr>
		<th>Age</th>
		<td><?php echo $age; ?> ans</td>
	</tr>
	<tr>
		<th>Email</th>
		<td><?php echo xmldecode(xmlentities($email)); ?></td>
	</tr>

</table>
<?php
$tableau = ob_get_clean();

if ( isset($_POST['btn_creat_conv']) )
{
	if ( isset($_POST['titre']) AND !empty($_POST['titre']) AND isset($_POST['content']) AND !empty($_POST['content']) )
	{
		$titre = xmlentities($_POST['titre']);
		$content = xmlentities($_POST['content']);
		$id_sender = $_SESSION['id'];
		$id_receiver = xmlentities($_GET['id']);

		$id_conv = getIDCONV($bdd);
		$id_conv = intval($id_conv) +1;

		create_conv($bdd, $titre, $id_sender, $id_receiver, $content, $id_conv);
		$success = "Message envoy&eacute;.";
	}
	else
	{
		$error = "Veuillez remplir tous les champs.";
	}
}


$photo = getPHOTO($bdd, $_GET['id']);

ob_start();
$x = 1;
if ( $photo === 0 )
{
	?>
	<p id="nophoto"><?php echo $userinfo['pseudo']; ?> n'a pas de photo</p>
	<?php
}
else
{
	$photo = explode(";", $photo);

	foreach ($photo as $key => $value)
	{
		if ( is_file("img/" . $userinfo['id_user'] . "-" . $value) )
		{
			?>
			<div class="colum_photo">

				<div class="container_img">
					<div class="titre_img">
						<p><?php echo "image n°" . $x; ?></p>
					</div>

					<img id="image-<?php echo $x; ?>" class="list_img" onclick="pop_up('image-<?php echo $x; ?>')" src="img/<?php echo $userinfo['id_user']; ?>-<?php echo $value; ?>" alt="photo">
				</div>

			</div>
			<?php
			$x++;
		}
	}
}

$list_photo = ob_get_clean();
//#################################################################
//########################## AFFICHAGE ERREUR #####################
//#################################################################
if ( isset($success) )
{
	?>
	<div class="success_alert" id="alert" onclick="closealert('alert')">
				<p><strong>Succ&egrave;s :</strong> <?php echo $success; ?></p>
	</div>
	<?php
}

if ( isset($error) )
{
	?>
	<div class="error_alert" id="alert" onclick="closealert('alert')">
				<p><strong>Erreur :</strong> <?php echo $error; ?></p>
	</div>
	<?php
}

require_once 'inc/view/user.php';

?>