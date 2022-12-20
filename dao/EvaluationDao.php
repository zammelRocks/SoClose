<?php
require_once '../model/connexion.php';
require_once '../model/Evaluation.class.php';
class Eva{

	public static function GetAllEva()
	{
		$connexionbd=new Connexion();
		$listcontact=$connexionbd->query("select * from evaluation");
		return $listcontact->fetchall();
	}

public static function AddNewEva($evaluation)
{
	$connexionbd=new Connexion();

	return $connexionbd->exec("insert into evaluation values('".$evaluation->getnom()."','".$evaluation->getnote()."')");
}

}