<?php
class Evaluation{
	
  private $nom;
  private $note;

 public function __construct()
 {
 	$this->nom="";
 	$this->note="";
 }

public function getnom()
{
	return $this->nom;
}

public function setnom($nom)
{
$this->nom=$nom;
}

public function getnote()
{
	return $this->note;
}

public function setnote($note)
{
$this->note=$note;
}

}
?>