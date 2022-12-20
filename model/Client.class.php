<?php
class Client
{
	private $idclient;
	private $nom;
	private $prenom;
	private $email;
	private $motdepasse;
	private $tel;
	private $date;
	private $role;

public function __construct()
{
	$this->idclient=0;
	$this->nom="";
	$this->prenom="";
	$this->email="";
	$this->motdepasse="";
	$this->tel="";
	$this->date="";
	$this->role=2;
}

public function getIdclient()
{
	return $this->idclient;
}

public function setIdclient($idclient)
{
$this->idclient=$idclient;
}

public function getNom()
{
	return $this->nom;
}

public function setNom($nom)
{
$this->nom=$nom;
}

public function getEmail()
{
	return $this->email;
}

public function setEmail($email)
{
$this->email=$email;
}

public function getMotdepasse()
{
	return $this->motdepasse;
}

public function setMotdepasse($motdepasse)
{
$this->motdepasse=$motdepasse;
}

public function getPrenom()
{
	return $this->prenom;
}

public function setPrenom($prenom)
{
$this->prenom=$prenom;
}
public function getTel()
{
	return $this->tel;
}

public function setTel($tel)
{
$this->tel=$tel;
}
public function getDate()
{
	return $this->date;
}

public function setDate($date)
{
$this->date=$date;
}


public function getRole()
{
	return $this->role;
}

public function setRole($role)
{
$this->role=$role;
}

}
?>