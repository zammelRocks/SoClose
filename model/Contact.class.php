<?php
class Contact
{
	private $nom;
	private $email;
	private $tel;
	private $objet;
	private $message;


public function __construct()
{
	$this->nom="";
	$this->email="";
	$this->tel="";
	$this->objet="";
	$this->message="";
}

public function getnom()
{
	return $this->nom;
}

public function setnom($nom)
{
$this->nom=$nom;
}

public function getemail()
{
	return $this->email;
}

public function setemail($email)
{
$this->email=$email;
}

public function gettel()
{
	return $this->tel;
}

public function settel($tel)
{
$this->tel=$tel;
}

public function getobjet()
{
	return $this->objet;
}

public function setobjet($objet)
{
$this->objet=$objet;
}

public function getmessage()
{
	return $this->message;
}

public function setmessage($message)
{
$this->message=$message;
}


}
?>