<?php
require_once '../dao/EvaluationDao.php';
require_once '../model/Evaluation.class.php';
switch ($_REQUEST['action']) {

			case 'add':
			$evaluation=new Evaluation();
			$evaluation->setnom($_REQUEST['sport']);
			$evaluation->setnote($_REQUEST['niveau']);

         Eva::AddNewEva($evaluation);
		header("location:../view/evaluation.php");
		break;

}
?>