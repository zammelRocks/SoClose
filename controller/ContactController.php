<?php
require_once '../dao/ContactDao.php';
require_once '../model/Contact.class.php';
switch ($_REQUEST['action']) {

			case 'add':
			$contact=new Contact();
			$contact->setnom($_REQUEST['nom&prenom']);
			$contact->setemail($_REQUEST['email']);
			$contact->settel($_REQUEST['tel']);
            $contact->setobjet($_REQUEST['objet']);
            $contact->setmessage($_REQUEST['comm']);

         Contacts::AddNewContact($contact);

		header("location:../view/contact.php");
		break;

	
}
?>