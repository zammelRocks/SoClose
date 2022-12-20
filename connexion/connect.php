<?php
include_once ("../model/connexion.php");

session_start();
$bdd= maConnexion();

$admin='admin';
$client='client';

if(isset($_REQUEST["email"]) && !(empty($_REQUEST["email"])))
{
	$login=$bdd->quote($_REQUEST["email"]);
}
else
{
	die("ajouter votre EMAIL !!!");
}

if(isset($_REQUEST["pass"]) && !(empty($_REQUEST["pass"])))
{
	$password=$bdd->quote($_REQUEST["pass"]);
}
else
{
	die("donner votre mot de passe  !!!");
}


$reqa="select * from $admin where login=$login and password=$password ";
$reponsea = $bdd->query($reqa) or die ($bdd->errorInfo()[2]);
$nba=$reponsea->rowCount();

if($nba==0)

{
	echo("veuillez verifiez vos données");
}
else
{
	$lignea=$reponsea->fetchObject();
	
	if($lignea->role == 1)
	{
		$_SESSION['role']=1;
		$_SESSION['nom']=$lignea->login;
		header("location: ../view/admin.php");
		exit;
	
	}
}

$reqc="select * from $client where email=$login and motdepasse=$password ";
$reponsec = $bdd->query($reqc) or die ($bdd->errorInfo()[2]);
$nbc=$reponsec->rowCount();

if($nbc==0)

{
	echo("veuillez verifiez vos données");
}
else
{
	$lignec=$reponsec->fetchObject();
	
	if($lignec->role == 2)
	{
		$_SESSION['role']=2;
		$_SESSION['nom']=$lignec->nom;
		header("location: ../view/activites.php");
		exit;
	
	}
}
?>