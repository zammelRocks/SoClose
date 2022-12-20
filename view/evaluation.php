<?php
   session_start();
   if((!isset($_SESSION['role'])) || (empty($_SESSION['role'])))
   {
		header("location: ../view/Index.php");
   }
if(($_SESSION['role']==1))
{
	header("location: ../view/admin.php");
}
?>
<!DOCTYPE html>
<html lang="fr">
<head>
<meta charset="utf-8"/>
<meta name="description" content=" Site de salle de sport My fitness" />
<meta name="keywords" content="santé, sport, fitness, healthy, salle de sport,musculation,entrainement,Myfitness, sallede gym "/>
<title>Evaluation des cours réalisé par Safa Mejri et Yasmine Triki</title>
<link rel="stylesheet" href="../css/style.css"/>
<script type="text/javascript" src="../js/controle.js"></script>
</head>
<body>
	<header>
		 <img src="../img/log.png" alt="logo" title="logo" class="log" width="140" height="140" />
		<center><h1 id="titre_principal">My fitness</h1></center>
	</header>

<center>
<nav>
	 <ul>
 
  <li><a href="../view/activites.php">Activites</a> </li>
 
  <li><a href="../view/planning.php">Planning</a></li> 

  <li><a href="../view/contact.php">Contact</a></li>
  <li><a href="../view/evaluation.php">Evaluation</a></li>
     </ul>
</nav></center>
<hr>

<article>
 	<center><h2 id="evaluez">Evaluez nos activités</h2></center>
 	<hr class="separateur">
 	<form name="f2" method="post" action="../controller/EvaluationController.php?action=add" >
<fieldset>
 <legend><strong>Evaluation</strong></legend>
 <div>
 <label for="cours">Choisir un cours:</label>
<input type="text" name="sport"/>
</div> <br/>
<div>
<label for="niveau">Donner une note (0 à 10)</label>
<input type="nombre" name="niveau" id="niveau" value="0" min="0" max="10" step="1"  /> 
</div> <br/>
 <div>
 <button type="submit"  class="bt"  name="bt6" onclick="verif2()">Enregistrer mon évaluation</button>
 <button type="reset"  class="bt"  name="bt7" >Annuler</button> 
 </div><br/>
</fieldset>
</form>
</article>
<footer>
	 <button type="submit" class="bt" name="deconns"><a href="../connexion/destroy.php">Deconnexion</a></button>

 <center>My Fitness&copy;2019-2020</center>
 </footer>

</body>
</html>