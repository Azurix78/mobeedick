<?php

require_once("globale/config.php");
require_once("globale/db.php");
require_once("globale/functions.php");


if(isset($_GET['page']))
	{
		if($_GET['page'] == "validation")
		{
			include_once("inc/controler/validation.php");
			exit;
		}
	}

if ( isset($_POST['btn_sup']) AND $_SESSION['id'] )
{
	delPROFIL($bdd, $_SESSION['id']);
	unset($_SESSION['id']);
	$success = "Compte supprim&eacute;";
}

if(!isset($_SESSION['id']))
{
	require_once("inc/controler/connect.php");
	exit;
}

require_once("inc/controler/header.php");

if ( isset($_GET['id']) )
{
	$id = abs(intval($_GET['id']));
	$id_exist = id_exist($bdd, $id);
	if ( $id_exist === false )
	{
		include_once("globale/404.php");
		require_once("inc/controler/footer.php");
		bddclose($bdd);
		exit;
	}
}

$inc = array();
$included = false;

$folder = opendir("./inc/controler");
while($file = readdir($folder))
{
	$path = pathinfo($file);
	if($path['extension'] == "php" && $file != "config.php")
	{
		$inc[] = $path['filename'];
	}
}

foreach($inc as $val)
{
	if(!isset($_GET['page']))
	{
		include_once("inc/controler/home.php");
		$included = true;
		break;
	}
	if (isset($_GET['page']) && $_GET['page'] != "header" && $_GET['page'] != "footer" && $_GET['page'] != "validation")
	{
		if($_GET['page'] == $val)
		{
			include_once("inc/controler/".$val.".php");
			$included = true;
			break;
		}
	}
}



if(!$included) {
	include_once("globale/404.php");
}

require_once("inc/controler/footer.php");
bddclose($bdd);

?>