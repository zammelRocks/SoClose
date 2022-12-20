
<?php
   session_start();
   if((!isset($_SESSION['role'])) || (empty($_SESSION['role'])))
   {
		header("location: ../view/Index.php");
   }
if(($_SESSION['role']==2))
{
	header("location: ../view/activites.php");
}
?>
<?php 
require_once "../dao/ClientDao.php"
?>

<!DOCTYPE html>
<html lang="fr">
<head>
<meta charset="utf-8"/>
<script type="text/javascript" src="../js/controle.js">
</script>

<meta name="description" content=" Site de salle de sport My fitness" />
<meta name="keywords" content="santé, sport, fitness, healthy, salle de sport,musculation,entrainement,Myfitness, sallede gym "/>
<title>Page Admin réalisée par Yasmine triki</title>
<link rel="stylesheet" href="../css/style.css"/>

</head >
<body>
	<header> 
		<a id="haut"></a>
		<img id="logo" src="../img/log.png" width="150" height="150" alt="logo de Myfitness" title="logoMyfitness" />
		<h1 id="titre_principal"><strong>My fitness (Admin)</strong></h1> 
		



</header>

<!-- afficher tous les clients !-->
<center><h2 id="inscrit">Liste des clients</h2></center>
<hr class="separateur">
<form name="f1" method="post" action="" >
<fieldset>
<legend><strong>Vos clients</strong></legend>

<br/>
<table class="">
	 <thead>
	 	<tr>
	 		<th>id</th>
	 		<th>Nom</th>
	 		<th>Prénom</th>
	 		<th>Email</th>
	 		<th>Tel</th>
	 		<th>Date de naissance</th>
	 	</tr>
	 	</thead>
	 	<tbody>
	 	<?php foreach (ClientDao::GetAllClient() as $value) {
	 	?>
	 	<tr>
	 	<td><?php echo $value[0]; ?></td>
	 	<td><?php echo $value[1]; ?></td>
	 	<td><?php echo $value[2]; ?></td>
	 	<td><?php echo $value[3]; ?></td>
	 	<td><?php echo $value[5]; ?></td>
	 	<td><?php echo $value[6]; ?></td>	
        </tr>
        <?php } ?> 
    </tbody>
</table>
</fieldset>
</form>
<!-- supprimer un client !-->
<center><h2 id="inscrit">Supprimer</h2></center>
<hr class="separateur">
<form name="f1" method="post" action="../controller/ClientController.php?action=delete" >
<fieldset>
<legend><strong>Suppression d'un client</strong></legend>
<div>
<label for="idclient">ID*:</label>
<input type="text" name="idclient" id="idclient" /> 
</div><br/>
<div>
<button type="submit" class="bt" name="supprimer" >Supprimer</button>
<button type="reset"  class="bt" >Annuler</button>
</div> 
</fieldset>
</form>

<!-- Ajout d'un client !-->
<article  class="form"  >
	<center><h2 id="inscrit">Ajouter</h2></center>
<hr class="separateur">
<form name="f1" method="post" action="../controller/ClientController.php?action=addadmin" >
<fieldset>
<legend><strong> nouveau client</strong></legend>
<br/> 
<div>
<label for="nom">Nom*:</label>
<input type="text" name="nom" id="nom"/>
</div> <br/>
<div>
<label for="prenom">Prénom*:</label>
<input type="text" name="prenom" id="prenom" /> 
</div><br/>
<div>
<label for="email">Email*:</label>
<input type="email" name="email" id="email" required/> 
</div><br/>
<div>
<label for="mdp">Mot de passe*:</label>
<input type="password" name="mdp" id="mdp"  /> 
</div><br/>
<div>
<label for="tel" >Tel:</label>
<input name="tel" type="tel"  maxlength="8" pattern="[0-9]{8}" />
</div><br/>
<div>
<label for="dn">Date de naissance: </label>
<input type="date" name="date" value="1992-01-01" min="01/01/1990" max="01/01/2000"  />
</div><br/>

<div>
<button type="submit"  class="bt"  name="bt3" onsubmit="verif1()" >Ajouter</button>
<button type="reset"  class="bt"  name="bt4" >Annuler</button> 
</div><br/>
<p>*Champs obligatoires</p> <a href="#haut">haut de page</a>

</fieldset>
</form>
</article>
 <br/>


<footer>
	 <button type="submit" class="bt" name="deconns"><a href="../connexion/destroy.php">Deconnexion</a></button>
 <br/>
 <center>My Fitness&copy;2018-2019</center>

 </footer>
</body>
</html>

