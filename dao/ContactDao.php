<?php
require_once '../model/connexion.php';
require_once '../model/Contact.class.php';
class Contacts{

	public static function GetAllContact()
	{
		$connexionbd=new Connexion();
		$listcontact=$connexionbd->query("select * from contact");
		return $listcontact->fetchall();
	}

public static function AddNewContact($contact)
{
	$connexionbd=new Connexion();

	return $connexionbd->exec("insert into contact values('".$contact->getnom()."','".$contact->getemail()."','".$contact->gettel()."','".$contact->getobjet()."', '".$contact->getmessage()."')");
}

}
?>