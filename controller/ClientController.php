<?php
require_once '../dao/ClientDao.php';
require_once '../model/Client.class.php';
switch ($_REQUEST['action']) {

			case 'add':
			$client=new Client();
			$client->setNom($_REQUEST['nom']);
			$client->setPrenom($_REQUEST['prenom']);
			$client->setEmail($_REQUEST['email']);
            $client->setMotdepasse($_REQUEST['mdp']);
            $client->setTel($_REQUEST['tel']);
            $client->setDate($_REQUEST['date']);

         ClientDao::AddNewClient($client);
		header("location:../html/activites.html");
		break;

		case 'addadmin':
			$client=new Client();
			$client->setNom($_REQUEST['nom']);
			$client->setPrenom($_REQUEST['prenom']);
			$client->setEmail($_REQUEST['email']);
            $client->setMotdepasse($_REQUEST['mdp']);
            $client->setTel($_REQUEST['tel']);
            $client->setDate($_REQUEST['date']);

         ClientDao::AddNewClient($client);
		header("location:../view/admin.php");
		break;

		case 'delete':
            $id=$_REQUEST['idclient'];   
            ClientDao::DeleteClient($id);
                    header("location:../view/admin.php");
    break;
}
?>