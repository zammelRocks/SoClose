<!DOCTYPE html>
<html lang="fr">
<head> 
 <meta charset="utf-8"/>
  <meta name="description" content=" Site de salle de sport My fitness" />
<meta name="keywords" content="santé, sport, fitness, healthy, salle de sport,musculation,entrainement,Myfitness, sallede gym "/>
<title>Inscription réalisé par Safa Mejri et Yasmine Triki </title>
<link rel="stylesheet" href="../css/style.css"/>
<script type="text/javascript" src="../js/controle.js"></script>
</head>
<body>
<header>
<a id="haut"></a>
  <img src="../img/log.png" alt="logo" title="logo" class="log" width="170" height="160" />

  <h1 id="titre_principal">My fitness</h1> 

<!-- menu -->
<center>
<nav>
	<ul>
  
  <li><a href="../view/tarifs.html">Tarifs</a></li>
  <li><a class="active" href="../view/inscription.php">Inscription</a></li>
  </ul>
</nav>
</center>
<hr>
</header>



<article  class="form"  >
<center><h2 id="inscrit">Nouveau Client</h2></center>
<hr class="separateur">
<form name="f1" method="post" action="../controller/ClientController.php?action=add" >
<fieldset>
<legend><strong>Formulaire d'inscription</strong></legend>
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
<button type="submit"  class="bt"  name="bt3" onsubmit="verif1()" >Créer mon compte</button>
<button type="reset"  class="bt"  name="bt4" >Annuler</button> 
</div><br/>
<p>*Champs obligatoires</p> <a href="#haut">haut de page</a>

</fieldset>
</form>
</article>

<footer>
 <center>My Fitness&copy;2019-2020</center>
 </footer>
 </body>
</html>