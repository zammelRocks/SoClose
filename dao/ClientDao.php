<?php
require_once '../model/connexion.php';
require_once '../model/Client.class.php';
class ClientDao{

	public static function GetAllClient()
	{
		$connexionbd=new Connexion();
		$listclient=$connexionbd->query("select * from client");
		return $listclient->fetchall();
	}

public static function AddNewClient($client)
{
	$connexionbd=new Connexion();

	return $connexionbd->exec("insert into client values('".$client->getIdclient()."','".$client->getNom()."','".$client->getPrenom()."','".$client->getEmail()."', '".$client->getMotdepasse()."','".$client->getTel()."','".$client->getDate()."','".$client->getRole()."' )");
}
public static function DeleteClient($id)
{
	$connexionbd=new Connexion();

	return $connexionbd->exec("delete from client where idclient=$id");
}
public static function SearchClient($id)
	{
		$connexionbd = new Connexion();
        $client=$connexionbd->query("select * from client where idclient=$id");
        return $client->fetchObject();
	}
}
?>